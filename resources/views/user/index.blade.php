@extends('layouts.app')
@section('content')
<div class="page-wrapper">
<div class="container-fluid">
   <!-- Page title -->
   <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
         <div class="col">
            <!-- Page pre-title -->
            <div class="page-pretitle">
               Cadastro
            </div>
            <h2 class="page-title">
               Usuários
            </h2>
         </div>
         <!-- Page title actions -->
         <div class="col-12 col-md-auto ms-auto d-print-none">
            <div class="btn-list">
               <span class="d-none d-sm-inline">
               <a href="#" class="btn btn-white">
               Filtrar
               </a>
               </span>
               <a href='{{ route('users.create') }}' class="btn btn-primary d-none d-sm-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                     <line x1="12" y1="5" x2="12" y2="19" />
                     <line x1="5" y1="12" x2="19" y2="12" />
                  </svg>
                  Criar Usuário
               </a>
               <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                     <line x1="12" y1="5" x2="12" y2="19" />
                     <line x1="5" y1="12" x2="19" y2="12" />
                  </svg>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="page-body">
   <div class="container-fluid">
      <table  id="table">
         <tr>
            <th>Nome Completo</th>
            <th>Cpf</th>
            <th>Cep</th>
            <th>Tipo de Logradouro</th>
            <th>Endereço</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Uf</th>
            <th>Celular</th>
            <th>Email</th>
         </tr>
         <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
         </tr>
         <tr>
            <td>Berglunds snabbköp</td>
            <td>Christina Berglund</td>
            <td>Sweden</td>
         </tr>
         <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
         </tr>
         <tr>
            <td>Ernst Handel</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
         </tr>
         <tr>
            <td>Island Trading</td>
            <td>Helen Bennett</td>
            <td>UK</td>
         </tr>
         <tr>
            <td>Königlich Essen</td>
            <td>Philip Cramer</td>
            <td>Germany</td>
         </tr>
         <tr>
            <td>Laughing Bacchus Winecellars</td>
            <td>Yoshi Tannamuri</td>
            <td>Canada</td>
         </tr>
         <tr>
            <td>Magazzini Alimentari Riuniti</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
         </tr>
         <tr>
            <td>North/South</td>
            <td>Simon Crowther</td>
            <td>UK</td>
         </tr>
         <tr>
            <td>Paris spécialités</td>
            <td>Marie Bertrand</td>
            <td>France</td>
         </tr>
      </table>
   </div>
</div>
@endsection
