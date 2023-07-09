<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-orange-50">
  <header class="md:pl-64 w-full bg-white">
    <div class="w-full flex justify-between py-4 px-2">
      <nav class="w-full px-2">
        <ul class="w-full flex justify-between">
          <a href="" class="px-2 font-medium">
            <li>カテゴリー一覧</li>
          </a>
          <li>
            ログインユーザー: 〇〇〇〇
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- Navigation for Desktop Screens -->
  <nav class="hidden md:block bg-gray-800 w-64 min-h-screen absolute top-0 left-0 overflow-auto">
    <!-- Logo -->
    <div class="flex items-center justify-center mt-10">
      <h1 class="text-white text-3xl font-bold uppercase">管理者画面</h1>
    </div>
    <!-- Navigation Links -->
    <div class="mt-10">
      <a href="{{ route('admin.dashboard') }}" class="block text-gray-300 hover:text-white font-semibold py-2 px-4">
        管理画面トップ
      </a>
      <a href="{{ route('admin.illust_list') }}" class="block text-gray-300 hover:text-white font-semibold py-2 px-4">
        イラスト管理
      </a>
      <a href="{{ route('admin.category_list') }}" class="block text-gray-300 hover:text-white font-semibold py-2 px-4">
        カテゴリー管理
      </a>
      <a href="{{ route('admin.tag_list') }}" class="block text-gray-300 hover:text-white font-semibold py-2 px-4">
        タグ管理
      </a>
      <a href="#" class="block text-gray-300 hover:text-white font-semibold py-2 px-4">
        リクエスト一覧
      </a>
      <a href="#" class="block text-gray-300 hover:text-white font-semibold py-2 px-4">
        問い合わせ
      </a>
      <a href="#" class="block text-gray-300 hover:text-white font-semibold py-2 px-4">
        管理者ユーザー一覧
      </a>
      <a href="#" class="block text-gray-300 hover:text-white font-semibold py-2 px-4">
        ログアウト
      </a>
    </div>
  </nav>
  <!-- Navigation for Small Screens -->
  <nav class="md:hidden bg-gray-800 w-full py-2">
    <div class="flex items-center justify-between px-4">
      <div>
        <h1 class="text-white text-3xl font-bold uppercase">Admin Screen</h1>
      </div>
      <div>
        <button class="text-gray-300 hover:text-white focus:outline-none">
          <svg class="h-8 w-8 fill-current" viewBox="0 0 24 24">
            <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
          </svg>
        </button>
      </div>
    </div>
    <!-- Navigation Links -->
    <div class="px-2 mt-2">
      <a href="#" class="block text-gray-300 hover:text-white font-semibold py-2 px-4">
        Dashboard
      </a>
      <a href="#" class="block text-gray-300 hover:text-white font-semibold py-2 px-4">
        Orders
      </a>
      <a href="#" class="block text-gray-300 hover:text-white font-semibold py-2 px-4">
        Customers
      </a>
    </div>
  </nav>
  <div class="md:pl-64">
    {{ $slot }}
  </div>
</body>
</html>