  <!-- Main Footer -->
  <footer class="main-footer" >
    <strong>Copyright &copy; 2021 <a href="#">Admin</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Admin</b>.
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{url('/')}}/assets/dist/js/jquery.js"></script>
<script src="{{url('/')}}/assets/dist/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{url('/')}}/assets/dist/js/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/assets/dist/js/dataTables.bootstrap4.min.js"></script>

<script>
  $(function () {
    var base_url = "{{ url('/') }}";
    $(".user_active").change(function(){
      var user_id = $(this).attr('user_id');
      var that = $(this);
      var checked = that.prop('checked') ? 1 : 0;
      console.log(checked);
      var conf = confirm('Are you sure?');
      if(conf)
      {
        $.ajax({
          url: base_url + '/admin/userdelete',
          Type: 'get',
          dataType: 'JSON',
          data: {
            user_id: user_id,
            isdel: checked
          },
          success: function(result)
          {
            console.log(result);
          },
          fail: function(err){
            console.log(err);
          }
        });
      }else{
        if(checked == 1)
        {
          that.prop('checked', false);
        }else if(checked == 0)
        {
          that.prop('checked', true);
        }
      }
    }); 

    $("#datatable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });   
  });
</script>
</body>
</html>
