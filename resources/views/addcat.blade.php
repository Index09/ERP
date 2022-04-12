@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">المبيعات</h3>
            </div>
            <div class="card-body">
          

              <!--cards -->
              <div class="row mt-2">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card bg-primary img-card box-primary-shadow">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <h2 class="mb-0 number-font"></h2>
                                    <p class="text-white mb-0">عدد المشتروات</p>
                                </div>
                                <div class="ms-auto"> <i class="fe fe-shopping-cart text-white fs-30 me-2 mt-2"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card bg-secondary img-card box-secondary-shadow">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <h2 class="mb-0 number-font"></h2>
                                    <p class="text-white mb-0">عدد القساط</p>
                                </div>
                                <div class="ms-auto"> <a data-bs-effect="effect-scale" data-bs-toggle="modal" href="#paymentsmodel" ><i  class="fe fe-eye text-white fs-30 me-2 mt-2"></i> </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card  bg-success img-card box-success-shadow">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <h2 class="mb-0 number-font"></h2>
                                    <p class="text-white mb-0">اجمالى المشتريات</p>
                                </div>
                                <div class="ms-auto"> <i class="fe fe-shopping-cart text-white fs-30 me-2 mt-2"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card bg-info img-card box-info-shadow">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <h2 class="mb-0 number-font"></h2>
                                    <p class="text-white mb-0">المبلغ المستحق منه</p>
                                </div>
                                <div class="ms-auto"> <i class="fe fe-credit-card text-white fs-30 me-2 mt-2"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>

            <!-- ROW CLOSED -->    
        </div>
    

        <div class="col-lg-12 col-md-12">
           
               
                    <h3 class="card-title text-blue text-center">مبيعات السنه الحاليه</h3>
               
                <div class="card-body">
                    <div id="chart-sracked" class="chartsh c3" style="max-height: 256px; position: relative;"><svg width="273.5" height="256" style="overflow: hidden;"><defs><clipPath id="c3-1649560487033-clip"><rect width="231.5" height="222"></rect></clipPath><clipPath id="c3-1649560487033-clip-xaxis"><rect x="-41" y="-20" width="303.5" height="50"></rect></clipPath><clipPath id="c3-1649560487033-clip-yaxis"><rect x="-39" y="-4" width="60" height="246"></rect></clipPath><clipPath id="c3-1649560487033-clip-grid"><rect width="231.5" height="222"></rect></clipPath><clipPath id="c3-1649560487033-clip-subchart"><rect width="231.5" height="0"></rect></clipPath></defs><g transform="translate(40.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="115.75" y="111" style="opacity: 0;"></text><g clip-path="url(http://127.0.0.1:8000/home#c3-1649560487033-clip)" class="c3-regions" style="visibility: visible;"></g><g clip-path="url(http://127.0.0.1:8000/home#c3-1649560487033-clip-grid)" class="c3-grid" style="visibility: visible;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="219" x2="219" y1="0" y2="222" style="visibility: hidden;"></line></g></g><g clip-path="url(http://127.0.0.1:8000/home#c3-1649560487033-clip)" class="c3-chart"><g class="c3-event-rects" style="fill-opacity: 0;"><rect class="c3-event-rect" x="0" y="0" width="231.5" height="222" style=""></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-data1" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-data1 c3-bars c3-bars-data1" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-data1" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-data1 c3-lines c3-lines-data1"><path class=" c3-shape c3-shape c3-line c3-line-data1" d="M13,222C13,222,30.333333333333336,179.5858585858586,39,161.72727272727275C47.666666666666664,143.8686868686869,56.333333333333336,126.01010101010101,65,114.84848484848484C73.66666666666667,103.68686868686868,82.5,110.38383838383838,91,94.75757575757575C99.5,79.13131313131312,107.5,27.78787878787879,116,21.090909090909093C124.5,14.393939393939396,133.33333333333334,42.29797979797979,142,54.575757575757564C150.66666666666666,66.85353535353534,159.33333333333334,80.24747474747474,168,94.75757575757575C176.66666666666666,109.26767676767676,185.5,120.42929292929293,194,141.63636363636363C202.5,162.84343434343432,219,222,219,222" style="stroke: rgb(108, 95, 252); opacity: 1;"></path></g><g class=" c3-shapes c3-shapes-data1 c3-areas c3-areas-data1"><path class=" c3-shape c3-shape c3-area c3-area-data1" d="M13,222C13,222,30.333333333333336,179.5858585858586,39,161.72727272727275C47.666666666666664,143.8686868686869,56.333333333333336,126.01010101010101,65,114.84848484848484C73.66666666666667,103.68686868686868,82.5,110.38383838383838,91,94.75757575757575C99.5,79.13131313131312,107.5,27.78787878787879,116,21.090909090909093C124.5,14.393939393939396,133.33333333333334,42.29797979797979,142,54.575757575757564C150.66666666666666,66.85353535353534,159.33333333333334,80.24747474747474,168,94.75757575757575C176.66666666666666,109.26767676767676,185.5,120.42929292929293,194,141.63636363636363C202.5,162.84343434343432,219,222,219,222L219,222C219,222,202.5,222,194,222C185.5,222,176.66666666666666,222,168,222C159.33333333333334,222,150.66666666666666,222,142,222C133.33333333333334,222,124.5,222,116,222C107.5,222,99.5,222,91,222C82.5,222,73.66666666666667,222,65,222C56.333333333333336,222,47.666666666666664,222,39,222C30.333333333333336,222,13,222,13,222Z" style="fill: rgb(108, 95, 252); opacity: 0.1;"></path></g><g class=" c3-selected-circles c3-selected-circles-data1"></g><g class=" c3-shapes c3-shapes-data1 c3-circles c3-circles-data1" style="cursor: pointer;"><circle class=" c3-shape c3-shape-0 c3-circle c3-circle-0" cx="13" cy="222" r="2.5" style="fill: rgb(108, 95, 252); opacity: 1;"></circle><circle class="c3-shape c3-shape-1 c3-circle c3-circle-1" cx="39" cy="161.72727272727275" r="2.5" style="fill: rgb(108, 95, 252); opacity: 1;"></circle><circle class=" c3-shape c3-shape-2 c3-circle c3-circle-2" cx="65" cy="114.84848484848484" r="2.5" style="fill: rgb(108, 95, 252); opacity: 1;"></circle><circle class=" c3-shape c3-shape-3 c3-circle c3-circle-3" cx="91" cy="94.75757575757575" r="2.5" style="fill: rgb(108, 95, 252); opacity: 1;"></circle><circle class=" c3-shape c3-shape-4 c3-circle c3-circle-4" cx="116" cy="21.090909090909093" r="2.5" style="fill: rgb(108, 95, 252); opacity: 1;"></circle><circle class="c3-shape c3-shape-5 c3-circle c3-circle-5" cx="142" cy="54.575757575757564" r="2.5" style="fill: rgb(108, 95, 252); opacity: 1;"></circle><circle class="c3-shape c3-shape-6 c3-circle c3-circle-6" cx="168" cy="94.75757575757575" r="2.5" style="fill: rgb(108, 95, 252); opacity: 1;"></circle><circle class="c3-shape c3-shape-7 c3-circle c3-circle-7" cx="194" cy="141.63636363636363" r="2.5" style="fill: rgb(108, 95, 252); opacity: 1;"></circle><circle class="c3-shape c3-shape-8 c3-circle c3-circle-8" cx="219" cy="222" r="2.5" style="fill: rgb(108, 95, 252); opacity: 1;"></circle></g></g></g><g class="c3-chart-arcs" transform="translate(115.75,106)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-data1  " style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-data1"></g></g></g></g><g clip-path="url(http://127.0.0.1:8000/home#c3-1649560487033-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(http://127.0.0.1:8000/home#c3-1649560487033-clip-xaxis)" transform="translate(0,222)" style="visibility: visible; opacity: 1;"><text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="231.5" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(13, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Ja</tspan><tspan x="0" dy="19" dx="0">n</tspan></text></g><g class="tick" transform="translate(39, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Fe</tspan><tspan x="0" dy="19" dx="0">b</tspan></text></g><g class="tick" transform="translate(65, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Ma</tspan><tspan x="0" dy="19" dx="0">r</tspan></text></g><g class="tick" transform="translate(91, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Ap</tspan><tspan x="0" dy="19" dx="0">r</tspan></text></g><g class="tick" transform="translate(116, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Ma</tspan><tspan x="0" dy="19" dx="0">y</tspan></text></g><g class="tick" transform="translate(142, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Ju</tspan><tspan x="0" dy="19" dx="0">n</tspan></text></g><g class="tick" transform="translate(168, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Ju</tspan><tspan x="0" dy="19" dx="0">l</tspan></text></g><g class="tick" transform="translate(194, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Au</tspan><tspan x="0" dy="19" dx="0">g</tspan></text></g><g class="tick" transform="translate(219, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Se</tspan><tspan x="0" dy="19" dx="0">p</tspan></text></g><path class="domain" d="M0,6V0H231.5V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(http://127.0.0.1:8000/home#c3-1649560487033-clip-yaxis)" transform="translate(0,0)" style="visibility: visible; opacity: 1;"><text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text><g class="tick" transform="translate(0,222)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,189)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">5</tspan></text></g><g class="tick" transform="translate(0,156)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">10</tspan></text></g><g class="tick" transform="translate(0,122)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">15</tspan></text></g><g class="tick" transform="translate(0,89)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">20</tspan></text></g><g class="tick" transform="translate(0,55)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">25</tspan></text></g><g class="tick" transform="translate(0,22)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">30</tspan></text></g><path class="domain" d="M-6,1H0V222H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(231.5,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0,222)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,200)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,178)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,156)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,134)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,112)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,90)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,68)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,46)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,24)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V222H6"></path></g></g><g transform="translate(20.5,256.5)" style="visibility: hidden;"><g clip-path="url(http://127.0.0.1:8000/home#c3-1649560487033-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(http://127.0.0.1:8000/home#c3-1649560487033-clip)" class="c3-brush" fill="none" pointer-events="all" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="overlay" pointer-events="all" cursor="crosshair" x="0" y="0" width="231.5" height="0"></rect><rect class="selection" cursor="move" fill="#777" fill-opacity="0.3" stroke="#fff" shape-rendering="crispEdges" style="display: none;"></rect><rect class="handle handle--e" cursor="ew-resize" style="display: none;"></rect><rect class="handle handle--w" cursor="ew-resize" style="display: none;"></rect></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://127.0.0.1:8000/home#c3-1649560487033-clip-xaxis)" style="opacity: 1;"><g class="tick" transform="translate(13, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Ja</tspan><tspan x="0" dy="19" dx="0">n</tspan></text></g><g class="tick" transform="translate(39, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Fe</tspan><tspan x="0" dy="19" dx="0">b</tspan></text></g><g class="tick" transform="translate(65, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Ma</tspan><tspan x="0" dy="19" dx="0">r</tspan></text></g><g class="tick" transform="translate(91, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Ap</tspan><tspan x="0" dy="19" dx="0">r</tspan></text></g><g class="tick" transform="translate(116, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Ma</tspan><tspan x="0" dy="19" dx="0">y</tspan></text></g><g class="tick" transform="translate(142, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Ju</tspan><tspan x="0" dy="19" dx="0">n</tspan></text></g><g class="tick" transform="translate(168, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Ju</tspan><tspan x="0" dy="19" dx="0">l</tspan></text></g><g class="tick" transform="translate(194, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Au</tspan><tspan x="0" dy="19" dx="0">g</tspan></text></g><g class="tick" transform="translate(219, 0)" style="opacity: 1;"><line x1="13" x2="13" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">Se</tspan><tspan x="0" dy="19" dx="0">p</tspan></text></g><path class="domain" d="M0,6V0H231.5V6"></path></g></g><g transform="translate(0,256)" style="visibility: hidden;"></g><text class="c3-title" x="136.75" y="0"></text></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 156.906px; left: 162.6px;"><table class="c3-tooltip"><tbody><tr><th colspan="2">Sep</th></tr><tr class="c3-tooltip-name--data1"><td class="name"><span style="background-color:#6c5ffc"></span>Maximum</td><td class="value">0</td></tr></tbody></table></div></div>
                </div>
          
        </div>
        <div class="raw">
            <div class="table-responsive">
                <table class="table table-vcenter ">
                    <thead>
                        <tr class="border-top">
                            <th>الاسم</th>
                            <th>العنوان</th>
                            <th>رقم الهاتف</th>
     
                        </tr>
                    </thead>
                    <tbody>

                        <tr >
                            <td></td>
                            <td></td>
                            <td></td>      
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>
</div>




<script>

function alert(){
    Swal.fire(
  'تم الاضافه',''
 ,
  'success'
)
}

</script>




@endsection