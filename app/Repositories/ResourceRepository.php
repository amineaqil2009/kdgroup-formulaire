<?php
namespace App\Repositories;
abstract class ResourceRepository
{
    protected $model;

	public function store(Array $inputs)
	{
		return $this->model->create($inputs);
	}
   
}