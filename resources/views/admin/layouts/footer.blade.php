
 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2019 <a href="http://github.com/yehia67">Yehia Tarek</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- jQuery 2.2.3 -->


<script src="{{ asset($plugins_path)  }}/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="https://unpkg.com/popper.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>


<!-- Bootstrap 3.3.6 -->
<script src="{{ asset($boot_path)  }}/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!--<script src="{{ asset($plugins_path)  }}/morris/morris.min.js"></script>-->
<!-- Sparkline -->
<script src="{{ asset($plugins_path)  }}/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{ asset($plugins_path)  }}/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ asset($plugins_path)  }}/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- DataTables -->
<script src="{{ asset($plugins_path)  }}/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset($plugins_path)  }}/datatables/dataTables.bootstrap.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset($plugins_path)  }}/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset($plugins_path)  }}/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{ asset($plugins_path)  }}/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset($plugins_path)  }}/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{ asset($plugins_path)  }}/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ asset($plugins_path)  }}/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset($js_path)  }}/app.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset($js_path)  }}/demo.js"></script>
@yield('script')
</body>
</html>
