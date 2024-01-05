# Readme em construção

# Agendamento
Base para o sistema de agendamento

# Configurando o .env

Adicionar a variável de ambiente: DAYS_TO_SHOW=7
No arquivo config/app.php, adicionar a chamada para usar a variável de ambiente criada acima:
'days_to_show' => env('DAYS_TO_SHOW', 7)

# Rodar as migrations

php artisan migrate

# Rodar os Seeds

php artisan db:seed

# COnfigurando o AminLTE

Executar o código abaixo para exibir as principais views

php artisan adminlte:install --only=main_views
