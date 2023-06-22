# Auth-in-github

# Зарегистрировать приложение в Github

# Зайти в свой аккаунт на Github
В правом верхнем углу выбрать “Settings”
Перейти на страницу “Developer settings” -> “OAuth Apps”
Нажать на кнопку “New OAuth App”
Ввести необходимые данные:
App name: название вашего приложения
Homepage URL: URL вашего сайта
Authorization callback URL: URL страницы на вашем сайте, которая будет получать ответ от Github
Нажать “Register Application”
Заменить YOUR_APP_CLIENT_ID и YOUR_APP_CLIENT_SECRET на соответствующие значения.
# В функции onAuthSuccess можно обработать полученные от Github данные пользователя