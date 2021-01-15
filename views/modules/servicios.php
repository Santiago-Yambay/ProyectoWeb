<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Basic CRUD Application - jQuery EasyUI CRUD Demo</title>
        <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.11/themes/default/easyui.css">
        <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.11/themes/icon.css">
        <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.11/themes/color.css">
        <script type="text/javascript" src="jquery-easyui-1.9.11/jquery.min.js"></script>
        <script type="text/javascript" src="jquery-easyui-1.9.11/jquery.easyui.min.js"></script>
    </head>
    <body>
        <h2>Formulario ingreso estudiantes</h2>
        
        <table id="dg" title="Estudiantes" class="easyui-datagrid" style="width:800px;height:250px"
                url="get_users.php"
                toolbar="#toolbar" pagination="true"
                rownumbers="true" fitColumns="true" singleSelect="true">
            <thead>
                <tr>
                    <th field="cedula" width="50">Cedula</th>
                    <th field="nombre" width="50">Nombre</th>
                    <th field="phone" width="50">Apellido</th>
                    <th field="curso" width="50">Curso</th>
                    <th field="direccion" width="50">Direccion</th>
                </tr>
            </thead>
        </table>
        <div id="toolbar">
            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Ingreso estudianter</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar estudiante</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Eliminar estudiante</a>
        </div>
        
        <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
            <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px" action="http://localhost/universidad/models/acceso.php">
            <input type="hidden" id="op" name="op" value="insertarAlumno">
                <h3>Ingrese datos del estudiante</h3>
                <div style="margin-bottom:10px">
                    <input name="cedula" class="easyui-textbox" required="true" label="Cedula:" style="width:100%">
                </div>
                <div style="margin-bottom:10px">
                    <input name="nombre" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
                </div>
                <div style="margin-bottom:10px">
                    <input name="apellido" class="easyui-textbox" required="true" label="Apellido:" style="width:100%">
                </div>
                <div style="margin-bottom:10px">
                    <input name="curso" class="easyui-textbox" required="true" label="Curso:" style="width:100%">
                </div>
                <div style="margin-bottom:10px">
                    <input name="direccion" class="easyui-textbox" required="true" label="Direccion:" style="width:100%">
                </div>
            </form>
        </div>
        <div id="dlg-buttons">
            <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="submitForm()" style="width:90px">Guardar</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
        </div>
        <script type="text/javascript">
            var url;
            function newUser(){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','New User');
                $('#fm').form('clear');
                url = 'save_user.php';
            }
            function editUser(){
                var row = $('#dg').datagrid('getSelected');
                if (row){
                    $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit User');
                    $('#fm').form('load',row);
                    url = 'update_user.php?id='+row.id;
                }
            }
            function saveUser(){
                $('#fm').form('submit',{
                    url: url,
                    iframe: false,
                    onSubmit: function(){
                        return $(this).form('validate');
                    },
                    success: function(result){
                        var result = eval('('+result+')');
                        if (result.errorMsg){
                            $.messager.show({
                                title: 'Error',
                                msg: result.errorMsg
                            });
                        } else {
                            $('#dlg').dialog('close');        // close the dialog
                            $('#dg').datagrid('reload');    // reload the user data
                        }
                    }
                });
            }
            function submitForm(){
              $('#fm').form("submit");
              $('#fm').form({
                  success:function(data){
                      console.log(data);
                      if(data.indexOf("ERROR")!==-1){
                          $.messager.alert("ERROR",data,"ERROR");
                      }else{
                          $.messager.alert(data);
                      }
                  }
              });
            }
            function destroyUser(){
                var row = $('#dg').datagrid('getSelected');
                if (row){
                    $.messager.confirm('Confirm','Are you sure you want to destroy this user?',function(r){
                        if (r){
                            $.post('destroy_user.php',{id:row.id},function(result){
                                if (result.success){
                                    $('#dg').datagrid('reload');    // reload the user data
                                } else {
                                    $.messager.show({    // show error message
                                        title: 'Error',
                                        msg: result.errorMsg
                                    });
                                }
                            },'json');
                        }
                    });
                }
            }
        </script>
    </body>
    </html>