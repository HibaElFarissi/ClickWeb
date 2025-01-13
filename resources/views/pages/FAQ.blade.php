@extends('layouts.navbar')
@section('content')
      <!--Breadcrumb Area-->
      <section class="breadcrumb-area banner-5">
         <div class="text-block">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 v-center">
                     <div class="bread-inner">
                        <div class="bread-menu">
                           <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="#">FAQ</a></li>
                           </ul>
                        </div>
                        <div class="bread-title">
                           <h2>FAQ</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Breadcrumb Area-->
      <!--Start Faqs-->
      <section class="pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <h2 class="mb0">FAQS</h2>
                  </div>
               </div>
            </div>
            <div class="row">

               <div class="col-md-6 mt60">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-1">
						  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapseOne">
							Incomprehensibility or readability? That is the question.
						  </button>
						</h2>
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample">
						  <div class="accordion-body">
							<div class="data-reqs">
								<h5 class="pb20">Content List</h5>
								<p>5 Years Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							 </div>
						  </div>
						</div>
					  </div>
					  <div class="accordion-item">
						<h2 class="accordion-header" id="heading-2">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapseOne">
							Origin and meaning of the Lorem Ipsum text
						  </button>
						</h2>
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample">
						  <div class="accordion-body">
							<div class="data-reqs">
								<h5 class="pb20">Content List</h5>
								<p>5 Years Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							 </div>
						  </div>
						</div>
					  </div>
				 </div>
               </div>

                <div class="col-md-6 mt60">
				<div class="accordion" id="accordionExample-a">
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-b">
						  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
							Incomprehensibility or readability? That is the question.
						  </button>
						</h2>
						<div id="collapse-1a" class="accordion-collapse collapse show" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
						  <div class="accordion-body">
							<div class="data-reqs">
								<h5 class="pb20">Content List</h5>
								<p>5 Years Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							 </div>
						  </div>
						</div>
					  </div>
					  <div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
							Origin and meaning of the Lorem Ipsum text
						  </button>
						</h2>
						<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
						  <div class="accordion-body">
							<div class="data-reqs">
								<h5 class="pb20">Content List</h5>
								<p>5 Years Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							 </div>
						  </div>
						</div>
					  </div>
				 </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Faqs-->
@endsection
