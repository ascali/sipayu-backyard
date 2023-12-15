@include('layouts.header')
	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<!-- begin::appheader -->
			@include('layouts.app_header')
			<!-- end::appheader -->
			<!--begin::Wrapper-->
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				<!--begin::Sidebar-->
				@include('layouts.app_sidebar')
				<!--end::Sidebar-->
				<!--begin::Main-->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Toolbar-->
						<div id="kt_app_toolbar" class="app-toolbar pt-5">
							<!--begin::Toolbar container-->
							<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
								<!--begin::Toolbar wrapper-->
								<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column gap-1 me-3 mb-2">
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
											<!--begin::Item-->
											<li class="breadcrumb-item text-gray-700 fw-bold lh-1">
												<a href="../dist/index.html" class="text-gray-500">
													<i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
												</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-gray-700 fw-bold lh-1">{{$title}}</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-gray-700">Default</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
										<!--begin::Title-->
										<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">{{$title}}</h1>
										<!--end::Title-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<a href="javascript:void(0)" class="btn btn-sm btn-success ms-3 px-4 py-3 sipayu_modal">Create</a>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar wrapper-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-fluid">
								<!--begin::Row-->
								<div class="row gx-5 gx-xl-12">
									<!--begin::Col-->
									<div class="col-xxl-12 mb-5 mb-xl-12">
										<!--begin::Chart widget 8-->
										<div class="card card-flush">
											<!--begin::Body-->
											<div class="card-body pt-6">
                                                
                                                <div class="table-responsive">
                                                    <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                                                        <thead>
                                                            <tr class="fw-semibold fs-6 text-muted">
                                                                <th>Name</th>
                                                                <th>Position</th>
                                                                <th>Office</th>
                                                                <th>Age</th>
                                                                <th>Start date</th>
                                                                <th>Salary</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Tiger Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>Edinburgh</td>
                                                                <td>61</td>
                                                                <td>2011/04/25</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Garrett Winters</td>
                                                                <td>Accountant</td>
                                                                <td>Tokyo</td>
                                                                <td>63</td>
                                                                <td>2011/07/25</td>
                                                                <td>$170,750</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ashton Cox</td>
                                                                <td>Junior Technical Author</td>
                                                                <td>San Francisco</td>
                                                                <td>66</td>
                                                                <td>2009/01/12</td>
                                                                <td>$86,000</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Position</th>
                                                                <th>Office</th>
                                                                <th>Age</th>
                                                                <th>Start date</th>
                                                                <th>Salary</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>

											</div>
											<!--end::Body-->
										</div>
										<!--end::Chart widget 8-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Content wrapper-->
					<!--begin::Footer-->
					@include('layouts.app_footer')
					<!--end::Footer-->
				</div>
				<!--end:::Main-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::App-->
	@include('layouts.scrolltop')
	@include('layouts.modal_template')
@include('layouts.footer')