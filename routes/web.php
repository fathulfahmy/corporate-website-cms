<?php

use App\Livewire\AboutPage;
use App\Livewire\BlogDetailPage;
use App\Livewire\BlogPage;
use App\Livewire\CollaboratorPage;
use App\Livewire\ContactPage;
use App\Livewire\HomePage;
use App\Livewire\ProjectPage;
use App\Livewire\ResearcherPage;
use App\Livewire\SponsorPage;
use App\Livewire\WorkshopPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/about', AboutPage::class)->name('about');
Route::get('/contact', ContactPage::class)->name('contact');
Route::get('/sponsors', SponsorPage::class)->name('sponsors');
Route::get('/collaborators', CollaboratorPage::class)->name('collaborators');
Route::get('/blog/{category?}', BlogPage::class)->name('blog.index');
Route::get('/blog/detail/{id?}', BlogDetailPage::class)->name('blog.detail');
Route::get('/projects/{status?}', ProjectPage::class)->name('projects');
Route::get('/researchers/{role?}', ResearcherPage::class)->name('researchers');
Route::get('/workshops', WorkshopPage::class)->name('workshops');
