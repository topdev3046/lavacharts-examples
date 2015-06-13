
Route::get('area', function()
{
    $population = Lava::DataTable();

    $population->addColumn('date', 'Year', 'date')
        ->addColumn('number', 'Number of People', 'pop')
        ->addRow(array('2006', 623452))
        ->addRow(array('2007', 685034))
        ->addRow(array('2008', 716845))
        ->addRow(array('2009', 757254))
        ->addRow(array('2010', 778034))
        ->addRow(array('2011', 792353))
        ->addRow(array('2012', 839657))
        ->addRow(array('2013', 842367))
        ->addRow(array('2014', 873490));

    Lava::AreaChart('Population')
        ->setOptions(array(
          'datatable' => $population,
          'title' => 'Population Growth',
          'legend' => Lava::Legend(array(
            'position' => 'in'
          ))
        ));

	  return View::make('area');
});

