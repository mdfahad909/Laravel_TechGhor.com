@extends('admin.layout.app')
@section('title',__('informations'))



@section('content')
        <div class="scrollable-page main-scrollable-page">
          <div id="page-content" class="page-wrapper clearfix">
            <div class="clearfix">
              <ul id="client-tabs" data-bs-toggle="ajax-tab" class="nav nav-tabs bg-white title" role="tablist">
                <li>
                  <a role="presentation" href="javascript:;" data-bs-target="#overview">Information</a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active" id="overview">
                  <div class="mt20">
                    <div class="row">
                      <form action="{{ $information?route('information.update','1'):route('information.store') }}" method="POST">
                        @csrf
                        @if ($information)
                        @method('PUT')
                        @endif
                         <div class="card">
                          <div class="card-header">
                            <h4>Information Settings</h4>
                          </div>
                          <div class="card-body">
                            <div class="form-group">
                              <div class="row">
                                <label for="phone"  class="col-md-3">{{ __('Phone Number') }}</label>
                                <div class="col-md-9">
                                    <input type="number" name="phone" id="phone" class="form-control" value="{{ old('phone', $information?$information->phone:'') }}" placeholder="{{ __('Phone Number') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="email"  class="col-md-3">{{ __('Email Address') }}</label>
                                <div class="col-md-9">
                                    <input type="email" name="email"  id="email" class="form-control" value="{{ old('email', $information?$information->email:'') }}" placeholder="{{ __('Email Address') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="facebook"  class="col-md-3">{{ __('Facebook Address') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook', $information?$information->facebook:'') }}" placeholder="{{ __('Facebook Address') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="instagram"  class="col-md-3">{{ __('instagram Address') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old('instagram', $information?$information->instagram:'') }}" placeholder="{{ __('Instagram Address') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="twitter"  class="col-md-3">{{ __('Twitter Address') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="twitter" id="twitter" class="form-control" value="{{ old('twitter', $information?$information->twitter:'') }}" placeholder="{{ __('Twitter Address') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="linkedin"  class="col-md-3">{{ __('Linkedin Address') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ old('linkedin', $information?$information->linkedin:'') }}" placeholder="{{ __('linkedin Address') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="pinterest"  class="col-md-3">{{ __('Pinterest Address') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="pinterest" id="pinterest" class="form-control" value="{{ old('pinterest', $information?$information->pinterest:'') }}" placeholder="{{ __('Pinterest Address') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="location"  class="col-md-3">{{ __('Location') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $information?$information->location:'') }}" placeholder="{{ __('Location') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="office_time"  class="col-md-3">{{ __('Office Time') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="office_time" id="office_time" class="form-control" value="{{ old('office_time', $information?$information->office_time:'') }}" placeholder="{{ __('Office Time') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="map" class="col-md-3">{{ __('Map') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="map" id="map" class="form-control" value="{{ old('map', $information?$information->map:'') }}" placeholder="{{ __('Map') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="happy_client" class="col-md-3">{{ __('Happy Clients') }}</label>
                                <div class="col-md-9">
                                    <input type="number" name="happy_client" id="happy_client" class="form-control" value="{{ old('happy_client', $information?$information->happy_client:'') }}" placeholder="{{ __('Happy Clients') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="company" class="col-md-3">{{ __('Companies') }}</label>
                                <div class="col-md-9">
                                    <input type="number" name="company" id="company" class="form-control" value="{{ old('company', $information?$information->company:'') }}" placeholder="{{ __('Companies') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="project_done" class="col-md-3">{{ __('Projects Done') }}</label>
                                <div class="col-md-9">
                                    <input type="number" name="project_done" id="project_done" class="form-control" value="{{ old('project_done', $information?$information->project_done:'') }}" placeholder="{{ __('Projects Done') }}">
                                </div>
                              </div>
                            </div>

                            <div class="float-end">
                              <button type="submit" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle icon-16">
                                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                  <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg> Information Save </button>
                            </div>
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
@endsection