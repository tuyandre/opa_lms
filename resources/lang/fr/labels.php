<?php

return array (
  'general' => 
  array (
    'all' => 'Tout',
    'yes' => 'Oui',
    'no' => 'Non',
    'custom' => 'Personnalisé',
    'actions' => 'Actions',
    'active' => 'Active',
    'buttons' => 
    array (
      'save' => 'Enregistrer',
      'update' => 'Mettre à jour',
    ),
    'hide' => 'Cacher',
    'inactive' => 'Inactive',
    'none' => 'Aucun',
    'show' => 'Voir',
    'toggle_navigation' => 'Navigation',
  ),
  'backend' => 
  array (
    'access' => 
    array (
      'roles' => 
      array (
        'create' => 'Créer un rôle',
        'edit' => 'Editer un rôle',
        'management' => 'Gestion des rôles',
        'table' => 
        array (
          'number_of_users' => 'Nombre d\'utilisateurs',
          'permissions' => 'Permissions',
          'role' => 'Rôle',
          'sort' => 'Ordre',
          'total' => 'rôle total|rôles total',
        ),
      ),
      'users' => 
      array (
        'active' => 'Utilisateurs actifs',
        'all_permissions' => 'Toutes les permissions',
        'change_password' => 'Modifier le mot de passe',
        'change_password_for' => 'Modifier le mot de passe pour :user',
        'create' => 'Créer un utilisateur',
        'deactivated' => 'Utilisateurs désactivés',
        'deleted' => 'Utilisateurs supprimés',
        'edit' => 'Éditer un utilisateur',
        'management' => 'Gestion des utilisateurs',
        'no_permissions' => 'Aucune permission',
        'no_roles' => 'Aucun rôle à affecter.',
        'permissions' => 'Permissions',
        'table' => 
        array (
          'confirmed' => 'Confirmé',
          'created' => 'Création',
          'email' => 'Adresse email',
          'id' => 'ID',
          'last_updated' => 'Mise à jour',
          'name' => 'Nom',
          'first_name' => 'Prénom',
          'last_name' => 'Nom',
          'no_deactivated' => 'Pas d\'utilisateurs désactivés',
          'no_deleted' => 'Pas d\'utilisateurs supprimés',
          'other_permissions' => 'Autres permissions',
          'permissions' => 'Permissions',
          'roles' => 'Rôles',
          'social' => 'Réseau social',
          'total' => 'utilisateur total|utilisateurs total',
          'abilities' => 'Les capacités',
          'status' => 'Statut',
        ),
        'tabs' => 
        array (
          'titles' => 
          array (
            'overview' => 'Résumé',
            'history' => 'Historique',
          ),
          'content' => 
          array (
            'overview' => 
            array (
              'avatar' => 'Avatar',
              'confirmed' => 'Confirmé',
              'created_at' => 'Créé le',
              'deleted_at' => 'Supprimé le',
              'email' => 'Adresse email',
              'last_login_at' => 'Last Login At',
              'last_login_ip' => 'Last Login IP',
              'last_updated' => 'Mise à jour',
              'name' => 'Nom complet',
              'first_name' => 'Prénom',
              'last_name' => 'Nom',
              'status' => 'Statut',
              'timezone' => 'Timezone',
            ),
          ),
        ),
        'view' => 'Voir un utilisateur',
        'user_actions' => 'Actions de l\'utilisateur',
      ),
    ),
    'backup' => 
    array (
      'api_key' => 'clé API',
      'api_secret' => 'Secret API',
      'app_key' => 'Clé d\'application',
      'app_secret' => 'App Secret',
      'app_token' => 'Jeton d\'application',
      'aws' => 'AWS S3',
      'backup_files' => 'Fichiers de sauvegarde',
      'backup_note' => '<b> Remarque </ b>: pour exécuter cette sauvegarde correctement, vous devez ajouter le code suivant à votre <b> ONGLET CRON: </ b> <br> <code> * * * * * cd / chemin d\'accès à votre -project && php artisan agenda: lancer >> / dev / null 2> & 1 </code>',
      'backup_notice' => 'Veuillez vous reporter à la documentation avant de commencer la sauvegarde. Il contient tous les détails étape par étape pour créer une sauvegarde avec Dropbox.',
      'backup_schedule' => 'Calendrier de sauvegarde',
      'backup_type' => 'Type de sauvegarde',
      'bucket_name' => 'Nom du seau',
      'configuration' => 'Configuration',
      'daily' => 'du quotidien',
      'db' => 'Base de données',
      'db_app' => 'Fichiers de base de données et d\'application',
      'db_storage' => 'Fichiers de base de données et de stockage',
      'dropbox' => 'Dropbox',
      'dropbox_note' => 'Veuillez vérifier la documentation pour <b> Comment obtenir les clés de l\'application DropBox? </b>',
      'email' => 'Notification par email',
      'enable_disable' => 'Activer désactiver',
      'generate_backup' => 'Générer une sauvegarde',
      'monthly' => 'Mensuel',
      'region' => 'Région',
      'title' => 'Sauvegarde',
    ),
  ),
  'frontend' => 
  array (
    'auth' => 
    array (
      'login_box_title' => 'Connexion',
      'login_button' => 'Entrer',
      'login_with' => 'Se connecter avec :social_media',
      'register_box_title' => 'S\'enregistrer',
      'register_button' => 'Créer le compte',
      'remember_me' => 'Se souvenir de moi',
    ),
    'contact' => 
    array (
      'box_title' => 'Nous contacter',
      'button' => 'Envoyer le message',
    ),
    'passwords' => 
    array (
      'forgot_password' => 'Avez-vous oublié votre mot de passe&nbsp;?',
      'reset_password_box_title' => 'Réinitialisation du mot de passe',
      'reset_password_button' => 'Réinitialiser le mot de passe',
      'send_password_reset_link_button' => 'Envoyer le lien de réinitialisation',
    ),
    'user' => 
    array (
      'passwords' => 
      array (
        'change' => 'Modifier le mot de passe',
      ),
      'profile' => 
      array (
        'avatar' => 'Avatar',
        'created_at' => 'Date de création',
        'edit_information' => 'Éditer les informations',
        'email' => 'Adresse email',
        'last_updated' => 'Date de mise à jour',
        'name' => 'Nom complet',
        'first_name' => 'Prénom',
        'last_name' => 'Nom',
        'update_information' => 'Mettre à jour les informations',
      ),
    ),
  ),
);
