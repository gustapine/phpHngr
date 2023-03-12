--Utilizando comandos SQL, faça a junção das duas tabelas (User, Order) selecionando apenas as
--colunas Name, City, Country, Date e Total do Pedido nos
--quais os ID's dos Usuários sejam 1, 3 e 5 e ordene pela coluna Name

SELECT user.user_name AS Name, user.user_city AS City, user.user_country AS Country, orders.order_date AS Date, orders.order_total AS Total
FROM user
INNER JOIN orders ON user.user_id = orders.order_user_id
WHERE user.user_id IN (1, 3, 5)
ORDER BY user.user_name;
