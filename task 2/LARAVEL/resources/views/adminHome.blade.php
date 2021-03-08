@extends('layouts/admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                  <div class="container mt-5">
                            <h3>Sales Order</h3>

                            <div class="row">
                                <div class="col">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                          
                                        
                                            <th scope="col">total penjualan</th>
                                            <th scope="col">Total pendapatan</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                       
                                            
                                            <td>{{$terjual}}</td>
                                            <td>Rp.{{$total}}</td>
                                          </tr>
                                       
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                  </div>

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
