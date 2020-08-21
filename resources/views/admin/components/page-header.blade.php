<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
               </div>
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item">Hôm Nay</li>
                         <li class="breadcrumb-item active">{{ Carbon\Carbon::now()->format('d/m/Y h:i:s A') }}</li>
                    </ol>
               </div>
          </div>
     </div>
</div>
