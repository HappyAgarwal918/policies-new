@extends('layout.master')
@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/innerpages.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('cookieconsent/style.css')}}">
@endsection

@section('content')

<div id="header-holder" class="inner-header">
  <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Create a cookie consent banner</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid sfeatures">
    <div class="container">
        <div id="ifeatures" class="row">
            <div class="col-md-12">
                <div class="row-title">Comply with GDPR and EU cookie law with our free cookie consent banner plugin. Simply go through the steps below to customize it and copy the code to your site. Click on the "Preview" button at any time to see how it looks.</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
    </div>
</div>
<div id="policy-head" class="container-fluid">
  <div class="container">
    <div class="row">
      <a href="#" class="ybtn ybtn-accent-color" style="width:auto;">Preview</a>
    </div>
    <div class="row">
        <h3>Configuration wizard</h3>
        <div class="panel-group">
          <div class="panel panel-primary">
            <form>
              <dl id="accordion">
                <dt class="active">1. Position</dt>
                <dd class="content">
                    <p>Choose the display style of the cookie consent banner.</p>
                    <ul class="display">
                        <li class="display-tooltip active">
                            <a onclick="" title="Tooltip" href="#">
                                <span class="img"></span>
                                <span class="lbl">Tooltip</span>
                            </a>
                        </li>
                        <li class="display-bar ">
                            <a onclick="" title="Bar" href="#">
                                <span class="img"></span>
                                <span class="lbl">Bar</span>
                            </a>
                        </li>
                    </ul>
                    <p>Choose where you would like to display it.</p>
                    <ul class="choices tooltip row">
                        <li class="col-ms-6 col-sm-3">
                            <a onclick="" title="Bottom left" href="#"><span>Bottom left</span></a>
                        </li>
                        <li class="col-ms-6 col-sm-3">
                            <a onclick="" title="Bottom right" href="#"><span>Bottom right</span></a>
                        </li>
                        <li class="col-ms-6 col-sm-3">
                            <a onclick="" title="Top left" href="#"><span>Top left</span></a>
                        </li>
                        <li class="col-ms-6 col-sm-3">
                            <a onclick="" title="Top right" href="#"><span>Top right</span></a>
                        </li>
                    </ul>
                    <ul class="choices bar row">
                        <li class="col-ms-6 col-sm-3">
                            <a onclick="" title="Bottom left" href="#"><span>Bottom left</span></a>
                        </li>
                        <li class="col-ms-6 col-sm-3">
                            <a onclick="" title="Bottom right" href="#"><span>Bottom right</span></a>
                        </li>
                        <li class="col-ms-6 col-sm-3">
                            <a onclick="" title="Top left" href="#"><span>Top left</span></a>
                        </li>
                        <li class="col-ms-6 col-sm-3">
                            <a onclick="" title="Top right" href="#"><span>Top right</span></a>
                        </li>
                    </ul>
                </dd>
                <dt>2. Layout</dt>
                <dd class="content">
                    <div class="row">
                      <div class="col-ms-6 col-xs-3 col-sm-2">
                        <div class="control">
                          <label for="popup_border">Border</label>
                            <div class="field">
                                <select class="input-select" id="popup_border" onchange="" name="popup_border">
                                    <option value="none">None</option>
                                    <option value="thin" selected="selected">Thin</option>
                                    <option value="normal">Normal</option>
                                    <option value="thick">Thick</option>
                                </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-ms-6 col-xs-3 col-sm-2">
                          <div class="control">
                              <label for="popup_corners">Corners</label>
                              <div class="field">
                                  <select class="input-select" id="popup_corners" onchange="" name="popup_corners">
                                      <option value="none">None</option>
                                      <option value="small" selected="selected">Small</option>
                                      <option value="normal">Normal</option>
                                      <option value="large">Large</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="col-ms-6 col-xs-3 col-sm-2">
                        <div class="control">
                            <label for="popup_padding">Padding</label>
                            <div class="field">
                                <select class="input-select" id="popup_padding" onchange="" name="popup_padding">
                                    <option value="none">None</option>
                                    <option value="small">Small</option>
                                    <option value="normal" selected="selected">Normal</option>
                                    <option value="large">Large</option>
                                </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-ms-6 col-xs-3 col-sm-2">
                          <div class="control">
                              <label for="popup_margin">Margin</label>
                              <div class="field">
                                  <select class="input-select" id="popup_margin" onchange="" name="popup_margin">
                                      <option value="none">None</option>
                                      <option value="small">Small</option>
                                      <option value="normal" selected="selected">Normal</option>
                                      <option value="large">Large</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="col-ms-6 col-xs-3 col-sm-2">
                          <div class="control">
                              <label for="popup_transparency">Transparency</label>
                              <div class="field">
                                  <select class="input-select" id="popup_transparency" onchange="" name="popup_transparency">
                                      <option value="none" selected="selected">None</option>
                                      <option value="5">5%</option>
                                      <option value="10">10%</option>
                                      <option value="15">15%</option>
                                      <option value="20">20%</option>
                                      <option value="25">25%</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="col-ms-6 col-xs-3 col-sm-2">
                          <div class="control">
                              <label for="popup_fontsize">Font size</label>
                              <div class="field">
                                  <select class="input-select" id="popup_fontsize" onchange="" name="popup_fontsize">
                                      <option value="tiny">Tiny</option>
                                      <option value="small">Small</option>
                                      <option value="default" selected="selected">Default</option>
                                      <option value="large">Large</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                    </div>
                </dd>
                <dt>3. Colors</dt>
                <dd class="content">
                  <p>Choose the color palette or specify your own colors.</p>
                  <ul class="colors">
                    <li class="color-0"><a onclick=" href="#">
                      <span style="background:#222222" class="item">
                        <span style="background:#ffffff" class="lbl"></span>
                        <span style="background:#ffffff" class="lbl"></span>
                        <span style="background:#fde296" class="btn"></span>
                      </span></a>
                    </li>
                    <li class="color-1">
                      <a onclick="" href="#">
                        <span style="background:#222222" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#b5e1a0" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-2">
                      <a onclick="" href="#">
                        <span style="background:#222222" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#b4eae4" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-3">
                      <a onclick="" href="#">
                        <span style="background:#222222" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#b3d0e4" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-4">
                      <a onclick="" href="#">
                        <span style="background:#222222" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#afb3e4" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-5">
                      <a onclick="" href="#">
                        <span style="background:#222222" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#d9baea" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-6">
                      <a onclick="" href="#">
                        <span style="background:#222222" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#e6b3b3" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-7">
                      <a onclick="" href="#">
                        <span style="background:#222222" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#f9f9f9" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-8">
                      <a onclick="" href="#">
                        <span style="background:#5c4812" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#fde296" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-9">
                      <a onclick="" href="#">
                        <span style="background:#2a5b12" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#b5e1a0" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-10">
                      <a onclick="" href="#">
                        <span style="background:#1b4b45" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#b4eae4" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-11">
                      <a onclick="" href="#">
                        <span style="background:#1a3242" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#b3d0e4" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-12">
                      <a onclick="" href="#">
                        <span style="background:#1c1f4b" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#afb3e4" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-13">
                      <a onclick="" href="#">
                        <span style="background:#351944" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#d9baea" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-14">
                      <a onclick="" href="#">
                        <span style="background:#491b1b" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#e6b3b3" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-15">
                      <a onclick="" href="#">
                        <span style="background:#606060" class="item">
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#ffffff" class="lbl"></span>
                          <span style="background:#f9f9f9" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-16">
                      <a onclick="" href="#">
                        <span style="background:#fff0ca" class="item">
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#e0bc57" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-17">
                      <a onclick="" href="#">
                        <span style="background:#e2f7d4" class="item">
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#7fc25e" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-18">
                      <a onclick="" href="#">
                        <span style="background:#edfdfa" class="item">
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#5ec2b6" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-19">
                      <a onclick="" href="#">
                        <span style="background:#cff5ff" class="item">
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#5e99c2" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-20">
                      <a onclick="" href="#">
                        <span style="background:#f0edff" class="item">
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#5e65c2" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-21">
                      <a onclick="" href="#">
                        <span style="background:#ffe8ff" class="item">
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#9f5ec2" class="btn"></span>
                        </span>
                      </a>
                    </li>
                    <li class="color-22">
                      <a onclick="" href="#"><span style="background:#ffe4e1" class="item">
                        <span style="background:#000000" class="lbl"></span>
                        <span style="background:#000000" class="lbl"></span>
                        <span style="background:#c25e5e" class="btn"></span>
                      </span>
                      </a>
                    </li>
                    <li class="color-23">
                      <a onclick="wpccPreviewSetColors(23);return false;" href="#">
                        <span style="background:#f6f6f6" class="item">
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#000000" class="lbl"></span>
                          <span style="background:#555555" class="btn"></span>
                        </span>
                      </a>
                    </li>
                  </ul>
                  <p><a onclick="" href="#">Customize colors</a></p>
                </dd>
                <dt>4. Cookie policy</dt>
                <dd class="content">
                  <div class="form-group form_part">
                    <label class="control-label col-sm-12 pb-2" for="cookie_policy_url">URL to your cookie policy</label>
                    <div class="col-sm-12 pb-3"> 
                      <input type="text" class="form-control" id="cookie_policy_url" name="cookie_policy_url" placeholder="https://www.yoursite.com/cookie-policy/">
                    </div>
                    <span class="help pb-3">Don’t have a cookie policy? <a target="_blank" href="https://www.websitepolicies.com/cookie-policy-generator" rel="noopener">Create one now</a>, it’s free!</span>
                  </div>
                </dd>
                <dt>5. Custom text</dt>
                <dd class="content">
                  <p>Customize the text displayed on the cookie consent banner or use default text.</p>
                  <div class="form-group form_part">
                    <label class="control-label col-sm-12 pb-2" for="message_text">Main message</label>
                    <div class="col-sm-12 pb-3"> 
                      <textarea type="text" class="form-control" id="message_text" name="message_text" placeholder="This website uses cookies to ensure you get the best experience on our website."></textarea>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group form_part">
                            <label class="control-label col-sm-12 pb-2" for="cookie_policy_text">Policy link text</label>
                            <div class="col-sm-12 pb-3"> 
                              <input type="text" class="form-control" id="cookie_policy_text" name="cookie_policy_text" placeholder="Learn more">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group form_part">
                            <label class="control-label col-sm-12 pb-2" for="button_text">Dismiss button text</label>
                            <div class="col-sm-12 pb-3"> 
                              <input type="text" class="form-control" id="button_text" name="button_text" placeholder="Got it!">
                            </div>
                          </div>
                      </div>
                  </div>
                </dd>
                <dt>6. Copy the code</dt>
                <dd class="content">
                  <p>Copy the code below to the HTML header section of your website, just above the &lt;/head&gt; tag.</p>
                  <div class="code">
                    <pre class="scrollable">
<code id="wpccPreviewCode">&lt;script src="https://cdn.websitepolicies.io/lib/cookieconsent/cookieconsent.min.js" defer&gt;&lt;/script&gt;&lt;script&gt;window.addEventListener("load",function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#f6f6f6","text":"#000000","border":"#555555"},"button":{"background":"#555555","text":"#ffffff"}}})});&lt;/script&gt;</code>
                    </pre>
                  </div>
                </dd>
              </dl>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
@section('js')
  <script type="text/javascript">
    (function(){
    $('#accordion').children('dd').eq(0).css('display','block');
    $('#accordion').on('click','dt',function(){
      var $this = $(this);
      $this.addClass('active').siblings('dt').removeClass('active');
      $this.next().slideDown(200).siblings('dd').slideUp(200);
    });
  })();
  </script>
@endsection