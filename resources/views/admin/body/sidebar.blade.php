<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="{{ url('dashboard') }}">
          <svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33"
          >
            <g fill="none" fill-rule="evenodd">
              <path
                class="logo-fill-blue"
                fill="#7DBCFF"
                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
              />
              <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
          </svg>
          <span class="brand-name">Admin Dashboard</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
          

          
            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                      <li  class="active" >
                        <a class="sidenav-item-link" href="{{ url('dashboard') }}">
                          <span class="nav-text">Home</span>
                        </a>
                      </li>
                      <li  class="active" >
                        <a class="sidenav-item-link" href="{{ route('home/slider') }}">
                          <span class="nav-text">Slider</span>
                        </a>
                      </li>
                      {{-- About Area Start --}}
                      <li  class="has-sub active expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                          aria-expanded="false" aria-controls="components">
                          <span class="nav-text">About Section</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="components">
                          <div class="sub-menu">
                            
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('all/about') }}">
                                <span class="nav-text">About us</span>
                              </a>
                            </li>
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('team/heading') }}">
                                <span class="nav-text">Team Heading</span>
                              </a>
                            </li>
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('team/membar') }}">
                                <span class="nav-text">Team Membar</span>
                              </a>
                            </li>
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('testimonial/all') }}">
                                <span class="nav-text">Testimonial</span>
                              </a>
                            </li>
                          </div>
                        </ul>
                      </li>
                      {{-- About Area end --}}
                      
                      
                      {{-- Service Area Start --}}
                      <li  class="has-sub active expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sercomponent"
                          aria-expanded="false" aria-controls="components">
                          <span class="nav-text">Service Section</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="sercomponent">
                          <div class="sub-menu">
                            
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('all/service/category') }}">
                                <span class="nav-text">Service Category</span>
                              </a>
                            </li>
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('service/heading') }}">
                                <span class="nav-text">Service Heading</span>
                              </a>
                            </li>

                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('all/service') }}">
                                <span class="nav-text">Service</span>
                              </a>
                            </li>

                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('feture/heading') }}">
                                <span class="nav-text">Feture Heading</span>
                              </a>
                            </li>

                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('all/feture')}}">
                                <span class="nav-text">Fetures</span>
                                
                              </a>
                            </li>
                           
                          </div>
                        </ul>
                      </li>
                      {{-- Service Area end --}}

                      {{-- Portfolio Area Start --}}
                      <li  class="has-sub active expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#portcomponent"
                          aria-expanded="false" aria-controls="components">
                          <span class="nav-text">Portfolio Section</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="portcomponent">
                          <div class="sub-menu">
                            
                                <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('portfolio/all') }}">
                                <span class="nav-text">Portfolio All</span>
                              </a>
                            </li>

                            <li  class="active" >
                            <a class="sidenav-item-link" href="{{ route('category/all') }}">
                              <span class="nav-text">All Category</span>
                              
                            </a>
                          </li>
                           
                          </div>
                        </ul>
                      </li>
                      {{-- Portfolio Area end --}}

                      
                      
                       {{-- Pricing Area Start --}}
                       <li  class="has-sub active expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Questions"
                          aria-expanded="false" aria-controls="components">
                          <span class="nav-text">Pricing Section</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="Questions">
                          <div class="sub-menu">
                            
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('all/price') }}">
                                <span class="nav-text">Pricing</span>
                              </a>
                            </li>
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('all/price/feture_list') }}">
                                <span class="nav-text">Pricing Feture List</span>
                              </a>
                            </li>

                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('all/category') }}">
                                <span class="nav-text">Price Category</span>
                              </a>
                            </li>
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('all/questions') }}">
                                <span class="nav-text">Questions</span>
                              </a>
                            </li>
                          
                          </div>
                        </ul>
                      </li>
                      {{-- Pricing Area end --}}

                      {{-- Blog Area Start --}}

                      <li  class="has-sub active expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#BlogCat"
                          aria-expanded="false" aria-controls="components">
                          <span class="nav-text">Blog Category</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="BlogCat">
                          <div class="sub-menu">
                            
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('all/blog/category') }}">
                                <span class="nav-text">All Blog Category</span>
                                
                              </a>
                            </li>
                            
                          

                          </div>
                        </ul>
                      </li>
                      
                      <li  class="has-sub active expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Blog"
                          aria-expanded="false" aria-controls="components">
                          <span class="nav-text">Blog Post</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="Blog">
                          <div class="sub-menu">
                            
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('blog/all') }}">
                                <span class="nav-text">Blog Post</span>
                                
                              </a>
                            </li>
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('all/questions') }}">
                                <span class="nav-text">Blog Comment</span>
                              </a>
                            </li>
                          

                          </div>
                        </ul>
                      </li>
                      {{-- Blog Area end --}}
                      
                      
                      {{-- Contact Area Start --}}
                      <li  class="has-sub active expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#component"
                          aria-expanded="false" aria-controls="components">
                          <span class="nav-text">Contact Section</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="component">
                          <div class="sub-menu">
                            
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('all/contact') }}">
                                <span class="nav-text">Contact Address</span>
                                
                              </a>
                            </li>
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('contact/message') }}">
                                <span class="nav-text">Contact Messege</span>
                              </a>
                            </li>
                          

                          </div>
                        </ul>
                      </li>
                      {{-- Contact Area end --}}
                  

                      {{-- Client Area start --}}

                      <li  class="active" >
                        <a class="sidenav-item-link" href="{{ route('brand/all') }}">
                          <span class="nav-text">Brand</span>
                        </a>
                      </li>
                                        
                      {{-- Client Area End --}}
                       
                      {{-- Footer Area Start --}}
                      <li  class="has-sub active expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#footercomponent"
                          aria-expanded="false" aria-controls="components">
                          <span class="nav-text">Footer Section</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="footercomponent">
                          <div class="sub-menu">
                            
                                <li  class="active" >
                              <a class="sidenav-item-link" href="{{ route('footer/all') }}">
                                <span class="nav-text">Footer All Info</span>
                              </a>
                            </li>

                            <li  class="active" >
                            <a class="sidenav-item-link" href="{{ route('all/footer/usefull/link') }}"> 
                              <span class="nav-text">Footer Useful Links</span>
                              
                            </a>
                          </li>
                            <li  class="active" >
                            <a class="sidenav-item-link" href="{{ route('all/footer/service/link') }}"> 
                              <span class="nav-text">Footer Service Links</span>
                              
                            </a>
                          </li>
                           
                          </div>
                        </ul>
                      </li>
                      {{-- Footer Area end --}}

                      {{-- ==========================================--}}
                      <li >
                        <a class="sidenav-item-link" href="analytics.html">
                          <span class="nav-text">Analytics</span>
                          
                          <span class="badge badge-success">new</span>
                          
                        </a>
                      </li>
                {{-- ==========================================--}}
                  
                </div>
              </ul>
            </li>
          

          

          
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                aria-expanded="false" aria-controls="ui-elements">
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text">UI Elements</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="ui-elements"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                      aria-expanded="false" aria-controls="components">
                      <span class="nav-text">Contact</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="components">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="alert.html">Alert</a>
                        </li>
                        
                        <li >
                          <a href="badge.html">Badge</a>
                        </li>
                        
                        <li >
                          <a href="breadcrumb.html">Breadcrumb</a>
                        </li>
                        
                        <li >
                          <a href="button-default.html">Button Default</a>
                        </li>
                        
                        <li >
                          <a href="button-dropdown.html">Button Dropdown</a>
                        </li>
                        
                        <li >
                          <a href="button-group.html">Button Group</a>
                        </li>
                        
                        <li >
                          <a href="button-social.html">Button Social</a>
                        </li>
                        
                        <li >
                          <a href="button-loading.html">Button Loading</a>
                        </li>
                        
                        <li >
                          <a href="card.html">Card</a>
                        </li>
                        
                        <li >
                          <a href="carousel.html">Carousel</a>
                        </li>
                        
                        <li >
                          <a href="collapse.html">Collapse</a>
                        </li>
                        
                        <li >
                          <a href="list-group.html">List Group</a>
                        </li>
                        
                        <li >
                          <a href="modal.html">Modal</a>
                        </li>
                        
                        <li >
                          <a href="pagination.html">Pagination</a>
                        </li>
                        
                        <li >
                          <a href="popover-tooltip.html">Popover & Tooltip</a>
                        </li>
                        
                        <li >
                          <a href="progress-bar.html">Progress Bar</a>
                        </li>
                        
                        <li >
                          <a href="spinner.html">Spinner</a>
                        </li>
                        
                        <li >
                          <a href="switcher.html">Switcher</a>
                        </li>
                        
                        <li >
                          <a href="table.html">Table</a>
                        </li>
                        
                        <li >
                          <a href="tab.html">Tab</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                      aria-expanded="false" aria-controls="icons">
                      <span class="nav-text">Icons</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="icons">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="material-icon.html">Material Icon</a>
                        </li>
                        
                        <li >
                          <a href="flag-icon.html">Flag Icon</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                      aria-expanded="false" aria-controls="forms">
                      <span class="nav-text">Forms</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="forms">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="basic-input.html">Basic Input</a>
                        </li>
                        
                        <li >
                          <a href="input-group.html">Input Group</a>
                        </li>
                        
                        <li >
                          <a href="checkbox-radio.html">Checkbox & Radio</a>
                        </li>
                        
                        <li >
                          <a href="form-validation.html">Form Validation</a>
                        </li>
                        
                        <li >
                          <a href="form-advance.html">Form Advance</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps"
                      aria-expanded="false" aria-controls="maps">
                      <span class="nav-text">Maps</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="maps">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="google-map.html">Google Map</a>
                        </li>
                        
                        <li >
                          <a href="vector-map.html">Vector Map</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#widgets"
                      aria-expanded="false" aria-controls="widgets">
                      <span class="nav-text">Widgets</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="widgets">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="general-widget.html">General Widget</a>
                        </li>
                        
                        <li >
                          <a href="chart-widget.html">Chart Widget</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                </div>
              </ul>
            </li>
          

          

          
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-chart-pie"></i>
                <span class="nav-text">Charts</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="charts"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="chartjs.html">
                          <span class="nav-text">ChartJS</span>
                          
                        </a>
                      </li>
                    
                  

                  
                </div>
              </ul>
            </li>
          

          

          
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                aria-expanded="false" aria-controls="pages">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Pages</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="pages"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="user-profile.html">
                          <span class="nav-text">User Profile</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                      aria-expanded="false" aria-controls="authentication">
                      <span class="nav-text">Authentication</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="authentication">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="sign-in.html">Sign In</a>
                        </li>
                        
                        <li >
                          <a href="sign-up.html">Sign Up</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                      aria-expanded="false" aria-controls="others">
                      <span class="nav-text">Others</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="others">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="invoice.html">invoice</a>
                        </li>
                        
                        <li >
                          <a href="error.html">Error</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                </div>
              </ul>
            </li>
          

          

          
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                aria-expanded="false" aria-controls="documentation">
                <i class="mdi mdi-book-open-page-variant"></i>
                <span class="nav-text">Documentation</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="documentation"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li class="section-title">
                        Getting Started
                      </li>
                    
                  

                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="introduction.html">
                          <span class="nav-text">Introduction</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="setup.html">
                          <span class="nav-text">Setup</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="customization.html">
                          <span class="nav-text">Customization</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                    
                      <li class="section-title">
                        Layouts
                      </li>
                    
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#headers"
                      aria-expanded="false" aria-controls="headers">
                      <span class="nav-text">Layout Headers</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="headers">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="header-fixed.html">Header Fixed</a>
                        </li>
                        
                        <li >
                          <a href="header-static.html">Header Static</a>
                        </li>
                        
                        <li >
                          <a href="header-light.html">Header Light</a>
                        </li>
                        
                        <li >
                          <a href="header-dark.html">Header Dark</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sidebar-navs"
                      aria-expanded="false" aria-controls="sidebar-navs">
                      <span class="nav-text">layout Sidebars</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="sidebar-navs">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="sidebar-open.html">Sidebar Open</a>
                        </li>
                        
                        <li >
                          <a href="sidebar-minimized.html">Sidebar Minimized</a>
                        </li>
                        
                        <li >
                          <a href="sidebar-offcanvas.html">Sidebar Offcanvas</a>
                        </li>
                        
                        <li >
                          <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                        </li>
                        
                        <li >
                          <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                        </li>
                        
                        <li >
                          <a href="right-sidebar.html">Right Sidebar</a>
                        </li>
                        
                      </div>
                    </ul>
                  </li>
                  

                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="rtl.html">
                          <span class="nav-text">RTL Direction</span>
                          
                        </a>
                      </li>
                    
                  

                  
                </div>
              </ul>
            </li>
          

          
        </ul>

      </div>

      <hr class="separator" />

      {{-- <div class="sidebar-footer">
        <div class="sidebar-footer-content">
          <h6 class="text-uppercase">
            Cpu Uses <span class="float-right">40%</span>
          </h6>
          <div class="progress progress-xs">
            <div
              class="progress-bar active"
              style="width: 40%;"
              role="progressbar"
            ></div>
          </div>
          <h6 class="text-uppercase">
            Memory Uses <span class="float-right">65%</span>
          </h6>
          <div class="progress progress-xs">
            <div
              class="progress-bar progress-bar-warning"
              style="width: 65%;"
              role="progressbar"
            ></div>
          </div>
        </div>
      </div> --}}
    </div>
  </aside>