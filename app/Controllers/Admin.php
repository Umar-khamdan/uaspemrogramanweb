<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\FeedbackModel;

class Admin extends BaseController
{
    protected $helpers = ['url']; 

    protected $articleModel;
    protected $feedbackModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->feedbackModel = new FeedbackModel();
    }

    public function index()
    {
        return view('admin/dashboard', [
            'title'           => 'Dashboard Admin',
            'total_articles'  => $this->articleModel->countAllResults(),
            'total_feedbacks' => $this->feedbackModel->countAllResults()
        ]);
    }

    public function article_list()
    {
        return view('admin/article_list', [
            'title'    => 'Daftar Artikel',
            'articles' => $this->articleModel->findAll()
        ]);
    }

    public function article_create()
    {
        if ($this->request->getMethod() === 'post') {
            if (!$this->validate([
                'title'  => 'required',
                'status' => 'required'
            ])) {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }

            $this->articleModel->save([
                'title'   => $this->request->getPost('title'),
                'content' => $this->request->getPost('content'),
                'status'  => $this->request->getPost('status')
            ]);
            return redirect()->to(base_url('index.php/admin/articles'))->with('success', 'Artikel berhasil disimpan');
        }
        return view('admin/article_create', ['title' => 'Tambah Artikel']);
    }

    public function article_edit($id)
    {
        $article = $this->articleModel->find($id);
        
        if ($this->request->getMethod() === 'post') {
            if (!$this->validate([
                'title'  => 'required',
                'status' => 'required'
            ])) {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }

            $this->articleModel->update($id, [
                'title'   => $this->request->getPost('title'),
                'content' => $this->request->getPost('content'),
                'status'  => $this->request->getPost('status')
            ]);
            return redirect()->to(base_url('index.php/admin/articles'))->with('success', 'Artikel berhasil diperbarui');
        }
        return view('admin/article_edit', ['title' => 'Edit Artikel', 'article' => $article]);
    }

    public function article_delete($id)
    {
        $this->articleModel->delete($id);
        return redirect()->to(base_url('index.php/admin/articles'))->with('success', 'Artikel berhasil dihapus');
    }

    public function feedback()
    {
        if ($this->request->getMethod() === 'post') {
            if (!$this->validate([
                'name'    => 'required',
                'email'   => 'required|valid_email',
                'message' => 'required'
            ])) {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }

            $this->feedbackModel->save([
                'name'    => $this->request->getPost('name'),
                'email'   => $this->request->getPost('email'),
                'message' => $this->request->getPost('message')
            ]);
            return redirect()->to(base_url('index.php/admin/feedback'))->with('success', 'Feedback berhasil dikirim');
        }
        return view('admin/feedback', [
            'title'     => 'Feedback Pengguna',
            'feedbacks' => $this->feedbackModel->findAll()
        ]);
    }
}
