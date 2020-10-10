@extends('parent')
 

@foreach ($master->Article as $Article)
 {{ $Article->title }} 
 {{ $Article->content }} 
@endforeach

