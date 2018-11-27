SELECT DISTINCT bautismos, sum(bautismos) as todosLosBautismos FROM `informemes`
INNER JOIN Distritos d on d.idCampo = 1
WHERE idPeriodo >=1 and idPeriodo <=8