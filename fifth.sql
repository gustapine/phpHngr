Utilizando comandos SQL com o resultado da query que você desenvolveu acima, 
faça uma junção das tabelas (User, Order) selecionando apenas a 
coluna Total e Date, de forma que exiba a SOMA dos totais de venda por MÊS/ANO.

SELECT DATE_FORMAT(order_date, '%Y-%m') AS year_month, SUM(order_total) AS total_sales
FROM user
JOIN orders ON user.user_id = orders.order_user_id
WHERE user.user_id IN (1, 3, 5)
GROUP BY year_month
ORDER BY year_month
