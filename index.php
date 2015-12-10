
<!DOCTYPE html>
<html lang="ru">
    <head>
        <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' media='all'>
        <meta charset="utf-8" />
        <title>Table Bootstrap</title>
    </head>
    <body>
          <table>
      <thead>
        <tr>
          <th>Заголовок 1</th>
          <th>Заголовок 2</th>
          <th>Заголовок 3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="3">Содержимое ячейки</td>
          <td colspan="2">Содержимое ячейки</td>
        </tr>
        <tr>
          <td>Содержимое ячейки</td>
          <td>Содержимое ячейки</td>
        </tr>
        <tr>
          <td>Содержимое ячейки</td>
          <td rowspan="2">Содержимое ячейки</td>
        </tr>
        <tr>
          <td colspan="2">Содержимое ячейки</td>
        </tr>
      </tbody>
    </table>
    </body>
</html>

