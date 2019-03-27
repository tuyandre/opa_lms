<?php

return array (
  'general' => 
  array (
    'all' => 'Todos',
    'yes' => 'Sí',
    'no' => 'No',
    'copyright' => 'Copyright',
    'custom' => 'Personalizado',
    'actions' => 'Acciones',
    'active' => 'Activo',
    'buttons' => 
    array (
      'save' => 'Guardar',
      'update' => 'Actualizar',
    ),
    'hide' => 'Ocultar',
    'inactive' => 'Inactivo',
    'none' => 'Ningúno',
    'show' => 'Mostrar',
    'toggle_navigation' => 'Abrir/Cerrar menú de navegación',
  ),
  'backend' => 
  array (
    'access' => 
    array (
      'roles' => 
      array (
        'create' => 'Crear Rol',
        'edit' => 'Modificar Rol',
        'management' => 'Administración de Roles',
        'table' => 
        array (
          'number_of_users' => 'Número de Usuarios',
          'permissions' => 'Permisos',
          'role' => 'Rol',
          'sort' => 'Orden',
          'total' => 'Todos los Roles',
        ),
      ),
      'users' => 
      array (
        'active' => 'Usuarios activos',
        'all_permissions' => 'Todos los Permisos',
        'change_password' => 'Cambiar la contraseña',
        'change_password_for' => 'Cambiar la contraseña para :user',
        'create' => 'Crear Usuario',
        'deactivated' => 'Usuarios desactivados',
        'deleted' => 'Usuarios eliminados',
        'edit' => 'Modificar Usuario',
        'management' => 'Administración de Usuarios',
        'no_permissions' => 'Sin Permisos',
        'no_roles' => 'No hay Roles disponibles.',
        'permissions' => 'Permisos',
        'table' => 
        array (
          'confirmed' => 'Confirmado',
          'created' => 'Creado',
          'email' => 'Correo',
          'id' => 'ID',
          'last_updated' => 'Última modificación',
          'name' => 'Nombre',
          'first_name' => 'Nombre',
          'last_name' => 'Apellidos',
          'no_deactivated' => 'Ningún Usuario desactivado disponible',
          'no_deleted' => 'Ningún Usuario eliminado disponible',
          'other_permissions' => 'Otros Permisos',
          'permissions' => 'Permisos',
          'roles' => 'Roles',
          'social' => 'Cuenta Social',
          'total' => 'Todos los Usuarios',
          'abilities' => 'Habilidades',
          'status' => 'Estado',
        ),
        'tabs' => 
        array (
          'titles' => 
          array (
            'overview' => 'Resúmen',
            'history' => 'Historia',
          ),
          'content' => 
          array (
            'overview' => 
            array (
              'avatar' => 'Avatar',
              'confirmed' => 'Confirmado',
              'created_at' => 'Creación',
              'deleted_at' => 'Eliminación',
              'email' => 'E-mail',
              'last_login_at' => 'Último Login En',
              'last_login_ip' => 'Último Login IP',
              'last_updated' => 'Última Actualización',
              'name' => 'Nombre',
              'first_name' => 'Nombre',
              'last_name' => 'Apellidos',
              'status' => 'Estatus',
              'timezone' => 'Zona horaria',
            ),
          ),
        ),
        'view' => 'Ver Usuario',
        'user_actions' => 'Acciones del usuario',
      ),
    ),
    'backup' => 
    array (
      'api_key' => 'Clave API',
      'api_secret' => 'API Secret',
      'app_key' => 'Clave de aplicación',
      'app_secret' => 'App secreta',
      'app_token' => 'App Token',
      'aws' => 'AWS S3',
      'backup_files' => 'Archivos de respaldo',
      'backup_note' => '<b> Nota </b>: para ejecutar esta copia de seguridad correctamente, debe agregar el siguiente código a su <b> TABLA CRON: </b> <br> <code> * * * * * cd / path-to-your -proyecto && php programa artesanal: ejecuta >> / dev / null 2> & 1 </code>',
      'backup_notice' => 'Por favor, consulte la documentación antes de comenzar la copia de seguridad. Tiene todos los detalles paso a paso para crear copias de seguridad con Dropbox.',
      'backup_schedule' => 'Horario de copia de seguridad',
      'backup_type' => 'Tipo de copia de seguridad',
      'bucket_name' => 'Nombre del cubo',
      'configuration' => 'Configuración',
      'daily' => 'Diario',
      'db' => 'Base de datos',
      'db_app' => 'Base de datos y archivos de aplicación',
      'db_storage' => 'Base de datos y archivos de almacenamiento',
      'dropbox' => 'Dropbox',
      'dropbox_note' => 'Consulte la documentación de <b> ¿Cómo obtener las claves de la aplicación DropBox? </b>',
      'email' => 'Notificación de correo electrónico',
      'enable_disable' => 'Habilitar deshabilitar',
      'generate_backup' => 'Generar copia de seguridad',
      'monthly' => 'Mensual',
      'region' => 'Región',
      'title' => 'Apoyo',
    ),
  ),
  'frontend' => 
  array (
    'auth' => 
    array (
      'login_box_title' => 'Iniciar Sesión',
      'login_button' => 'Iniciar Sesión',
      'login_with' => 'Iniciar Sesión mediante :social_media',
      'register_box_title' => 'Registrarse',
      'register_button' => 'Registrarse',
      'remember_me' => 'Recordarme',
    ),
    'contact' => 
    array (
      'box_title' => 'Contáctenos',
      'button' => 'Enviar información',
    ),
    'passwords' => 
    array (
      'expired_password_box_title' => 'Tu contraseña a expirado.',
      'forgot_password' => 'Has olvidado la contraseña?',
      'reset_password_box_title' => 'Reiniciar contraseña',
      'reset_password_button' => 'Reiniciar contraseña',
      'update_password_button' => 'Actualizar contraseña',
      'send_password_reset_link_button' => 'Enviar el correo de verificación',
    ),
    'user' => 
    array (
      'passwords' => 
      array (
        'change' => 'Cambiar la contraseña',
      ),
      'profile' => 
      array (
        'avatar' => 'Avatar',
        'created_at' => 'Creado el',
        'edit_information' => 'Modificar la información',
        'email' => 'Correo',
        'last_updated' => 'Última modificación',
        'name' => 'Nombre',
        'first_name' => 'Nombre',
        'last_name' => 'Apellidos',
        'update_information' => 'Actualizar la información',
      ),
    ),
  ),
);
