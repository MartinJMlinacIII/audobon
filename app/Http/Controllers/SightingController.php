<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Audobon\Domain\Factory\SightingFactory;
use Audobon\Domain\Factory\BirdFactory;
use Audobon\Domain\Factory\UserFactory;
use Audobon\Domain\Entity\Sighting;
use Symfony\Component\CssSelector\Tests\Node\CombinedSelectorNodeTest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use LaravelDoctrine\ORM\Facades\EntityManager;

class SightingController extends Controller
{
    public function __construct(SightingFactory $sightingFactory, BirdFactory $birdFactory, UserFactory $userFactory){
        $this->sightingFactory = $sightingFactory;
        $this->birdFactory = $birdFactory;
        $this->userFactory = $userFactory;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sightingRepository = EntityManager::getRepository(Sighting::class);

        return view("Sighting.index", array('sightings' => $sightingRepository->findAll()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Sighting.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'email' =>  'email',
            'phone' =>  'regex:^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$',
            'date'  => 'required|date|before:now',
            'time'  => 'required',
            'location' => 'required',
            'species' => 'required',
            'description' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            $messages = $validator->messages();

            return Redirect::to('create')
                ->withErrors($validator);
        } else {

            $user = $this->userFactory->createUser();
            $user->setName(Input::get('name'));
            $user->setEmail(Input::get('email'));
            $user->setPhoneNumber(Input::get('phoneNumber'));
            EntityManager::persist($user);

            $bird = $this->birdFactory->createBird();
            $bird->setSpecies(Input::get('species'));
            $bird->setDescription(Input::get('description'));
            EntityManager::persist($bird);

            $sighting = $this->sightingFactory->createSighting($bird, $user);
            $sighting->setTime(Input::get('time'));
            $sighting->setDate(Input::get('date'));
            $sighting->setLocation(Input::get('location'));
            EntityManager::persist($sighting);

            EntityManager::flush();

            return Redirect::to('/');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
