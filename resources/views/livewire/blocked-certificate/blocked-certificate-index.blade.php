<div class="page-wrapper">
    <div class="container-fluid">
       <!-- Page title -->
       <div class="page-header d-print-none">
          <div class="row g-2 align-items-center">
             <div class="col">
                <h2 class="page-title">
                    BLOQUEIO DE CERTIDÃO
                </h2>
             </div>
          </div>
       </div>
    </div>
    <div class="col-12 col-md-auto ms-auto d-print-none">
       <div class="btn-list">
         @can('permission', 'blocked.create')
          <a wire:click="addBlockedCertificate" class="btn btn-primary items-center inline-flex" data-bs-toggle="modal"
             data-bs-target="#modal-report">
             <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
             <svg class="hidden lg:block" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
             </svg>
             Cadastrar Bloqueio
          </a>
          @endcan
       </div>
    </div>
    <div class="page-body">
       <div class="container_fluid">
          <div class="container-fluid" class="input-icon">
             <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                   stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <circle cx="10" cy="10" r="7"></circle>
                   <line x1="21" y1="21" x2="15" y2="15"></line>
                </svg>
             </span>
             <input wire:model="searchTerm" type="text" value="" class="form-control" placeholder="Pesquisar.."
                aria-label="Search in website">
          </div>
          <br>
          <div class="card">
             <div class="card-body">
                <div id="table-default" class="table-responsive">
                   <table class="table">
                      <thead>
                         <tr>
                            <th><button class="table-sort" >Nome do Cartorio</button></th>
                            <th><button class="table-sort" >UF</button></th>
                            <th><button class="table-sort" >Municipio</button></th>
   
                         </tr>
                      </thead>
                      <tbody class="table-tbody">
                         @foreach ($blockedCertificates as $blockedCertificate)
                         <tr @can('permission', 'blocked.edit') wire:click="clickUpdate({{$blockedCertificate->id}}) @endcan">
                            <td class="">{{$blockedCertificate->registry->name}}</td>
                            <td class="">{{$blockedCertificate->registry->uf->name}}</td>
                            <td class="">{{$blockedCertificate->registry->county->name}}</td>
                         </tr>
                         @endforeach
                      </tbody>
                   </table>
                </div>
                {{ $blockedCertificates->links() }}
             </div>
          </div>
       </div>
    </div>