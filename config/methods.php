<?php
return [
    'validate' => function ($request) {
        return $request->validate([
            "title" => 'required|max:255',
            "description" => 'nullable',
            "thumb" => 'nullable|max:255|url',
            "price" => 'max:6',
            "series" => 'nullable|max:255',
            "sale_date" => 'nullable|max:10|date',
            "type" => 'nullable|max:100'
        ]);
    }
];