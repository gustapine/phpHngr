 Utilizando comandos SQL com o resultado da query que você desenvolveu acima, 
 faça uma junção das tabelas (User, Order) 
 selecionando apenas a coluna Country e Total, 
 de forma que exiba a SOMA dos totais de venda por país.

SELECT u.user_country AS Country, SUM(o.order_total) AS Total
FROM user u
INNER JOIN Orders o ON u.user_id = o.order_user_id
WHERE u.user_id IN (1, 3, 5)
GROUP BY u.user_country
ORDER BY u.user_country ASC;
