<?php

return [
    'change-pass' => 'Alterar senha',
    'logout' => 'Sair',

    'login' => [
        'title' => 'Identifique-se',
        'subtitle' => 'Faça o seu login',
        'email' => 'E-mail',
        'password' => 'Senha',
        'enter' => 'Entrar',
        'remember' => 'Esqueceu sua senha?',
        'signup' => 'Criar uma nova conta',
    ],

    'remember' => [
        'title' => 'Redefina sua senha',
        'subtitle' => 'Redefina sua senha',
        'message' => 'Digite seu endereço de e-mail e nós lhe enviaremos instruções para redefinir a sua senha.',
        'hint' => 'Digite seu e-mail',
        'enter' => 'Enviar',
        'back' => 'Voltar ao login',
        'messages' => [
            'sendmail' => 'Foi enviado para você um e-mail com instruções para trocar a sua senha.',
        ],
    ],

    'reset' => [
        'title' => 'Trocar senha',
        'subtitle' => 'Troque sua senha',
        'message' => 'Escolha uma senha segura e não reutilize em outras contas.',
        'new' => 'Nova senha',
        'confirm' => 'Repita a senha',
        'enter' => 'Trocar senha',
        'back' => 'Voltar ao login',
        'messages' => [
            'pass-changed' => 'Senha alterada com sucesso.',
        ],
    ],

    'changepass' => [
        'title' => 'Trocar senha',
        'subtitle' => 'Troque sua senha',
        'message' => 'Chegou na hora de trocar a sua senha, por questões de segurança é necessário que você crie uma nova.',
        'atual' => 'Senha atual',
        'new' => 'Nova senha',
        'confirm' => 'Repita a nova senha',
        'enter' => 'Trocar senha',
    ],

    'signup' => [
        'title' => 'Criar conta no CombatsForce',
        'subtitle' => 'Bem vindo ao CombatsForce',
        'email' => 'Seu e-mail',
        'name' => 'Seu nome',
        'password' => 'Senha',
        'confirm' => 'Repita a sua senha',
        'enter' => 'Criar conta',
        'terms' => 'Eu os aceito os <a href=":link">termos e regras</a> do combatsforce',
        'back' => 'Voltar ao login',
    ],

    'errors' => [
        'login' => 'Usuário ou senha incorreta',
        'user-notfound' => 'Usuário não encontrado',
        'user-disabled' => 'Usuário sem permissão para acessar o sistema',
        'no-change-pass' => 'Sem permissão para trocar a senha',
        'no-email-template' => 'Modelo de e-mail password não foi implementado',
    ],
];
