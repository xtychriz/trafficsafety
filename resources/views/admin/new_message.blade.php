
@extends('layouts.app')

@section('header')
@include('partials.admin.header')
@endsection

@section('body')

   <div class="right_col" role="main">
          <div class="">
                <div class="page-title">
                <div class="title_left">
                    <h3>Traffic Rule Offenders</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                    </div>
                </div>
                </div>
             <div class="clearfix"></div>
              @include('partials.user.alert')

            
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Send Message to Users<small>( ensure users username is entered correctly)</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                <div class="" role="tabpanel" data-example-id="togglable-tabs">Send a quick message!</a>
                        </li>
                        
                      </ul>
                      <div id="myTabContent" class="tab-content">
                         <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                             <div class="x_content">
                                <br/>
                               
                                <form class="form-horizontal form-label-left input_mask" method="POST" action="{{ route('admin_new_message')}}">

                                     {{ csrf_field() }}
                                    <input type="hidden" name="action" value="log_message">

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                        <input type="text" required="" class="form-control has-feedback-left" name="username" placeholder="Receiver Username" >
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                        <input type="text" required="" class="form-control" name="title" placeholder="Message Title" >
                                        <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                        
                                        <textarea class="form-control" required rows="4" name="message" placeholder='Message Body'></textarea>
                                        
                                    </div>
                               

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                            <button class="btn btn-primary  pull-right" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success  pull-right">Send Message</button>
                                        </div>
                                    </div>

                                </form>
                            </div>

                         </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="clearfix"></div>

            </div>
            
           

          </div>
        </div>
      

     

@endsection


@section('footer')
  @include('partials.admin.footer')
@endsection



@section('scripts')
     <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <script src="../js/custom.js"></script>
@endsection