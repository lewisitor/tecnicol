@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row" style="width:1200px; clear:both;">
        <div style="float:left; position:relative; padding:0px 0px 0px 10px;">
            <div class="panel panel-default" >
                <div class="panel-heading" style="background-color:orange">01 Cursos Regulares </div>

                <div class="panel-body">
             <!--   <img src="img/home1.png" height="45" width="90">
                  <br> <strong style="padding: 0px 0px 0px 0px;">Site ainda está em construção</strong> -->
                  <ol>
                      <li> CONTABILIDADE GERAL</li>
                      <li> INGLES PRATICO E ORAL</li>
                      <li> SECRETARIADO EXECUTIVO</li>
                      <li> GESTAO DE RECURSOS HUMANOS</li>
                      <li> RELACOES PUBLICAS E MARKETING</li>
                      <li> INFORMATICA BASICA E INTERMEDIA</li>
                      <li> MONTAGEM E REPARACAO</li>
                      <li> DE COMPUTADORES</li>
                      <li> MONTAGEM E ADMISTRACAO DE REDES</li>
                  </ol>

                </div>
            </div>
        </div>



        <div  style="float:left; position:relative; padding:0px 0px 0px 10px;">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:orange" >02 Cursos Tecnico Profissionais </div>

                <div class="panel-body">
<!--                <img src="img/home1.png" height="40" width="90">
                  <br> <strong style="padding: 0px 0px 0px 0px;">Site ainda está em construção</strong> -->

                  <ul>
                      <li> ADMINISTRACAO</li>
                      <li> CONTABILIDADE</li>
                      <li> SECRETARIADO</li>
                      <LI>INFORMATICA</LI>
                  </ul>

                </div>
            </div>
        </div>

        <div  style="float:left; position:relative; padding:0px 0px 0px 10px;">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:orange">03 Cursos Corporativos </div>

                <div class="panel-body">
<!--                <img src="img/home1.png" height="40" width="90">
                  <br> <strong style="padding: 0px 0px 0px 0px;">Site ainda está em construção</strong> -->
                  <ul type="disc">
                      <li>LIDERANCA E GESTAO DE EQUIPES</li>
                      <li>EXCEL AVANCADO</li>
                      <li>ATENDIMENTO AO CLIENTE</li>
                      <li>GESTAO DE PROJECTOS E EM PROJECT</li>
                      <li>CULTURA DE TRABALHO E 
                      BRIO PROFISSIONAL</li>
                      <li> CURSOS SOB MEDIDA</li>


                  </ul>
                </div>
            </div>
        </div>

        <div  style="float:left; position:relative; padding:0px 0px 0px 10px;">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:orange" >04 Eventos </div>

                <div class="panel-body">
<!--                <img src="img/home1.png" height="40" width="90">
                  <br> <strong style="padding: 0px 0px 0px 0px;">Site ainda está em construção</strong> -->

                  <ul>
                      <li>SEMINARIOS</li>
                      <li>PALESTRAS</li>
                      <li>CONFERENCIAS</li>
                      


                  </ul>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection


  <!-- container section end -->

     <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- chartjs -->
    <script src="assets/chart-master/Chart.js"></script>
    <!-- custom chart script for this page only-->
    <script src="js/chartjs-custom.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

     <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>  
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>    
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>

      <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
    $(function(){
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    });



  </script>