@extends('layouts.default')
@section('title', 'Dashboard')
@section('content')

<div class="body-wrapper">
    <div class="container-fluid">
        <div class=" card-head card  shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-5">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8 text-white" > brand profile</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb text-white">
                                <li class="breadcrumb-item ">
                                    <a class="text-muted text-decoration-none text-white" href="/minisidebar/index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Create Compaign</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="../assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-12">
            <div class="card">
                <div class="card-body ">
                    <h> here is the content of blank page </h1>
                </div>
            </div>
        </div> -->
   
    
        <section class="profile-card py-4 px-4">
            <div class=" row-md gx-4 user-info">
                <div class="col-md-2 user-avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                </div>

                <div class="col-md-3  user-details ">
                    <h1 class="text-white">Welcome, User</h1>
                    <p>Your profile completion progress</p>
                    

                    <div class="progress-custom mt-3">
                        <div class="progress ">
                             <div class="progress-bar" role="progressbar"  aria-valuenow="10" aria-valuemin="0" aria-valuemax="50" style="width: 50%;"></div>
                        </div>
                        <div class="progress-value"> 18% </div>
                    </div>
              </div>
                

  
            </div>

            <div class="view-social py-3 ">
                <p class="m-0 text-center">view social insight</p>    
            </div>
            
            

            <div class=" completion-sections mt-4">
                <div class=" p-3 section incomplete">
                   
                    <div class=" card-heading">
                        <h4>INCOMPLETE</h4>
                        <div >
                             <p class="m-0">About You</p>
                             <p class="m-0">Phone: 9187817285</p>
                         </div>
                    </div>
                    <a href="#" class="edit">EDIT</a>
                </div>

                
                <div class=" col-12 p-3 section incomplete">   
                    <div class=" card-heading">
                        <h4>COMPLETE</h4>
                        <span>
                             <p class="m-0"> Social Accounts</p>
                             <p class="m-0">Instagram: @username</p>
                        </span>
                    </div>
                    <a href="#" class="edit">EDIT</a>
                </div>
                


                <div class=" p-3 section incomplete">   
                    <div class=" card-heading">
                        <h4>INCOMPLETE</h4>
                        <span >
                             <p class="m-0"> Payments</p>     
                        </span>
                    </div>
                    <a href="#" class="edit">EDIT</a>
                </div>     
                
            </div>
        </section>
    
</div>

    <style>


.progress-custom {
    display: table;
    width: 100%;
    margin-bottom: 20px; /*optionally same as the margin bottom of progress class*/
}

.progress-custom .progress{
    margin-bottom: 0;
    display: table-cell;
    vertical-align: middle;
}

.progress-custom .progress-value{
    display: table-cell;
    margin-left: 5px;
    width: 5%;
    margin-left: 20px;
    padding: 0 4px; /*optionally*/
}



.card-heading h4{
    color:#9d1c64;
}

.card-head{
    background: linear-gradient(135deg, #cc5e9b, #e3a6c8);

}

.page-info h2 {
    margin: 0;
    font-size: 1.5rem;
    
}

.page-info p {
    margin: 5px 0 0;
    
    color: #fff;
    
}

.header-icon{
    border: 1px solid white;
}

.header-icon img {
    width: 50px;
    height: 50px;

}

.profile-card {
    background: linear-gradient(50deg, #cc5e9b, #e3a6c8);
    padding: 20px;
    border-radius: 15px;
    color: white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.user-info {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.user-avatar img {
    border: 2px solid white;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin-right: 30px;
}

.user-details h3 {
    margin: 0;
    font-size: 1.4rem;
}

.user-details p {
    margin: 5px 0 0;
    font-size: 0.9rem;
    opacity: 0.9;
}
.user-details{
    position: relative;
}
.progress-number{
    position: absolute;
    top:77px;
    bottom:0;
    left:300px
}


.progress-bar {
    background: linear-gradient(135deg, #e4b1ff, #9d1c64);
    height: 100%;
    border-radius: 10px;
}

.progress {
    background-color: rgba(255, 255, 255, 0.3);
    border-radius: 10px;
    height: 12px;
    margin: 10px 0;
    position: relative;
}



.view-social{
    background: linear-gradient(135deg, #e9b2d1,#e9b2d1);
    height: 40px;
    border-radius: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}




.completion-sections {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.section {
    background: rgba(255, 255, 255, 0.3);
    border-radius: 10px;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
}

.incomplete {
    opacity: 0.7;
}

.complete {
    opacity: 1;
}

.edit {
    background: rgba(0, 0, 0, 0);

    text-decoration: none;
    color: rgb(157, 28, 100);
    font-size: 0.85rem;
    font-weight: bold;
}




    </style>

        


    </div>
</div>

@stop

@pushOnce('scripts')
<script>

</script>
@endPushOnce