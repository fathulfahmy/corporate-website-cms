<?php

use App\Livewire\AboutPage;
use App\Livewire\BlogPage;
use App\Livewire\CollaboratorPage;
use App\Livewire\ContactPage;
use App\Livewire\HomePage;
use App\Livewire\ProjectPage;
use App\Livewire\ResearcherPage;
use App\Livewire\SponsorPage;
use App\Livewire\WorkshopPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/about', AboutPage::class);
Route::get('/contact', ContactPage::class);
Route::get('/sponsors', SponsorPage::class);
Route::get('/collaborators', CollaboratorPage::class);
Route::get('/blog', BlogPage::class);
Route::get('/projects', ProjectPage::class);
Route::get('/researchers', ResearcherPage::class);
Route::get('/workshops', WorkshopPage::class);