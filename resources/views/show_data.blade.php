@extends('layouts.header')

@section('content')
<div class="container-fluid">
	<div class="toggle" style="text-align: right;">
		<div class="btn-group ">
			<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>Select to Hide
			</a>
			<ul class="dropdown-menu" style="padding: 10px" id="myDiv">
				<li><p id="name_hide">Name</p></li>
				<li><p id="contact_hide">Contact No</p></li>
				<li><p id="email_hide"> E-Mail</p></li>
				<li><p id="amout_hide">Amount</p></li>
				<li><p id="address_hide">Address</p></li>
				<li><p id="purpose_hide">Purpose</p></li>
			</ul>
		</div>
	</div>
	<div class="card">


		<script>
			$(document).ready(function(){
				$("#name_hide").click(function(){
					$(".name").toggle();
				});
				$("#contact_hide").click(function(){
					$(".contact").toggle();
				});
				$("#email_hide").click(function(){
					$(".email").toggle();
				});
				$("#amout_hide").click(function(){
					$(".amount").toggle();
				});
				$("#address_hide").click(function(){
					$(".address").toggle();
				});
				$("#purpose_hide").click(function(){
					$(".purpose").toggle();
				});
				
			});
		</script>

		<!-- /.card-header -->
		<div class="card-body">
			
			
			<table id="example1" class="table table-bordered table-striped">

				<thead>

					<tr>
						<th class="name">Name</th>
						<th class="contact">Contact No</th>
						<th  class="email">E-Mail</th>
						<th class="amount">Amount</th>
						<th class="address">Address</th>
						<th class="purpose">Purpose</th>
					</tr>
				</thead>
				<tbody>
					<?php $i= '1'; ?>
					@foreach ($users as $user)
					<tr>
						<td class="name">{{ $user->name }}</td>
						<td class="contact">{{ $user->contact_no }}</td>
						<td class="email">{{ $user->email  }}</td>
						<td class="amount"> {{ $user->loan_amount }}</td>
						<td class="address">{{ $user->address }}</td>
						<td class="purpose">{{ $user->purpose }}</td>
					</tr>              
				</tbody>
				@endforeach

			</table>
		</div>
		<!-- /.card-body -->
	</div>
</div>
@endsection
