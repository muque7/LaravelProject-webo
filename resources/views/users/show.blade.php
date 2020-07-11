

@extends('layouts.default')
@section('title', $user->name)

@section('content')
<h6>用户id</h6>{{ $user->id }}
<h6>用户名</h6>{{ $user->name }}
<h6>用户邮箱</h6> {{ $user->email }}
<div class="row">
  <div class="offset-md-2 col-md-8">
    <div class="col-md-12">
      <div class="offset-md-2 col-md-8">
        <section class="user_info">
          @include('shared._user_info', ['user' => $user])
        </section>
      </div>
    </div>
  </div>
</div>
@stop