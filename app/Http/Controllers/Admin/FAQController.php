<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = FAQ::orderBy('order')->get();
        return view('admin.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'is_active' => 'boolean',
            'order' => 'integer|min:0'
        ]);

        FAQ::create($request->all());

        return redirect()->route('admin.faq.index')
            ->with('success', 'FAQ berhasil ditambahkan');
    }

    public function edit(FAQ $faq)
    {
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(Request $request, FAQ $faq)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'is_active' => 'boolean',
            'order' => 'integer|min:0'
        ]);

        $faq->update($request->all());

        return redirect()->route('admin.faq.index')
            ->with('success', 'FAQ berhasil diperbarui');
    }

    public function destroy(FAQ $faq)
    {
        $faq->delete();

        return redirect()->route('admin.faq.index')
            ->with('success', 'FAQ berhasil dihapus');
    }
}
