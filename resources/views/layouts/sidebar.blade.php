<div id="sidebar">
            <div class="d-block">
                <!-- <h3 class="float-left text-read pt-1 pl-3 mb-0">Admin</h3>                     -->
                <a href="javscript:;" class="text-dark" data-toggle=".fill" id="sidebar-toggle"> 
                        <i class="la la-ellipsis-h la-2x"></i>
                </a>                                
            </div>
            <ul class="pb-5 pl-5 admin-menu dekstop-menu">
                <h3 class="text-dark pt-1 pl-3 mb-4">{{ config('app.name') }}</h3>                                        
            <li data-sidebar="dashboard"><a class="py-3 px-3" href="{{ url('/apps') }}"><i class="la la-navicon"></i><span>Dashboard</span></a></li>
                <li data-sidebar="widgets"><a class="py-3 px-3" href="{{ url('/apps/create') }}"><i class="la la-th"></i><span>Create App</span></a></li>
                <li data-sidebar="setting"><a class="py-3 px-3" href="{{ url('/ads/1/edit') }}"><i class="la la-gears"></i><span>Settings</span></a></li>
            </ul>
 </div>