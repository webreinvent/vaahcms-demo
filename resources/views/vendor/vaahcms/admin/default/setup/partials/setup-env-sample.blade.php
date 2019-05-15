APP_NAME={{$data->app_name}}
APP_ENV=local
APP_KEY=base64:{{$data->app_key}}
APP_DEBUG=true
APP_URL={{$data->app_url}}

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST={{$data->db_host}}
DB_PORT={{$data->db_port}}
DB_DATABASE={{$data->db_database}}
DB_USERNAME={{$data->db_username}}
DB_PASSWORD={{$data->db_password}}

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"


DEBUGBAR_ENABLED=false