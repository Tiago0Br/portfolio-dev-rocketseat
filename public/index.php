<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio Dev</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        red: '#E3646E',
                        purple: '#BB72E9',
                        blue: '#3996DB',
                        green: '#82BC4F',
                        yellow: '#EABD5F',
                        'gray-100': '#0D0E11',
                        'gray-200': '#16181D',
                        'gray-300': '#292C34',
                        'gray-400': '#878EA1',
                        'gray-500': '#C0C4CE',
                        'gray-600': '#E2E4E9'
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-200 text-white">
    <section class="h-[682px] bg-[url('/images/Background_Intro.png')]">
        <div class="h-full flex flex-col items-center justify-center gap-20">
            <header class="flex flex-col items-center gap-[56px] max-w-[680px]">
                <div class="size-[96px] rounded-full border-2 border-red">
                    <img src="https://github.com/Tiago0Br.png" class="rounded-full" alt="Foto de perfil do usuário">
                </div>
                <div class="flex flex-col items-center gap-5">
                    <p class="text-center">
                        Hello World! Meu nome é <strong class="text-red font-normal">Tiago Lopes</strong> e eu sou
                        <strong class="block text-6xl">Desenvolvedor PHP</strong>
                    </p>
                    <p class="text-justify text-sm text-gray-400">
                        Transformo necessidades em aplicações reais, evolventes e funcionais.
                        Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
                    </p>
                </div>
            </header>
            <div class="flex items-center gap-4">
                <div class="text-black font-bold rounded-full bg-green px-2 py-1">
                    GitHub
                </div>
                <div class="text-black font-bold rounded-full bg-purple px-2 py-1">
                    PHP
                </div>
                <div class="text-black font-bold rounded-full bg-blue px-2 py-1">
                    CSS
                </div>
                <div class="text-black font-bold rounded-full bg-red px-2 py-1">
                    HTML
                </div>
                <div class="text-black font-bold rounded-full bg-yellow px-2 py-1">
                    Javascript
                </div>
            </div>
        </div>
    </section>
</body>
</html>