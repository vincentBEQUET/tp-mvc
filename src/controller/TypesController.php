<?php

class TypesController {

    public function index()
    {
        $types = Type::findAll();
        view('types.types', compact('types'));
    }

    public function show()
    { 

    }

    public function add()
    { 

    }

    public function save()
    { 

    }



}