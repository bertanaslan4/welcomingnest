<?php

namespace App\Livewire;

use App\Models\Advert;
use App\Models\Cities;
use App\Models\Countries;
use App\Models\States;
use Livewire\Component;

class LocationFilter extends Component
{

    public $countries;
    public $states = [];
    public $cities = [];
    public $selectedCountry = null;
    public $selectedState = null;
    public $selectedCity = null;
    public $adverts = [];

    public function mount()
    {
        $locale = session()->get('locale');
        $this->countries = Countries::all();
        $this->adverts = Advert::whereHas('translations', function ($query) use ($locale) {
            $query->where('locale', $locale);
        })->with(['city.state.country'])->get(); // İlanları şehir, eyalet ve ülke ile beraber getir
    }

    public function updatedSelectedCountry($country_id)
    {
        $this->states = States::where('country_id', $country_id)->get();
        $this->selectedState = null;
        $this->selectedCity = null;
        $this->cities = [];
        $this->filterAdverts();
    }

    public function updatedSelectedState($state_id)
    {
        $this->cities = Cities::where('state_id', $state_id)->get();
        $this->selectedCity = null;
        $this->filterAdverts();
    }

    public function updatedSelectedCity($city_id)
    {
        $this->filterAdverts();
    }

    public function filterAdverts()
    {
        $locale = session()->get('locale');
        $this->adverts = Advert::whereHas('translations', function ($query) use ($locale) {
            $query->where('locale', $locale);
        })->whereHas('city.state.country', function($query) {
            if ($this->selectedCountry) {
                $query->where('countries.id', $this->selectedCountry);
            }
        })
            ->when($this->selectedState, function($query) {
                $query->whereHas('city.state', function($q) {
                    $q->where('states.id', $this->selectedState);
                });
            })
            ->when($this->selectedCity, function($query) {
                $query->where('city_id', $this->selectedCity);
            })
            ->get();
    }


    public function render()
    {
        return view('livewire.location-filter');
    }
}
