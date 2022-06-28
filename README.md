Para rodar o projeto localmente, criar banco de dados chamado bandejao_app via phpmyadmin
Após isso, rodar os seguintes comandos a partir da raiz do projeto:

    
    php artisan migrate:fresh --seed
    php artisan serve
    
    
Para acessar a dashboard de admin, após se logar com usuário admin (pode criar diretamente via phpmyadmin ou utilizar o abaixo)
    contatoviniciusgomes@gmail.com
    password
    
A dashboard se encontra no diretorio /admin (como no exemplo http://127.0.0.1:8000/admin/)
