<?php

class PrintPayslip
{
    // savybes 
    private $employees;

    public function __construct($argEmployeesArr)
    {
        $this->employees = $argEmployeesArr;
    }


    public function printAsList()
    {
        // bedras algalapis
        echo '<h2>Algalapis is klases</h2>';
        echo '<ul>';
        foreach ($this->employees as $employee) {
            $fullName = $employee->getFullName();
            $salary = $employee->withdrawSalary();
            echo "<li> $fullName: $salary </li>";
        }
        echo '</ul>';
    }

    public function printTable()
    {
        // sugeneruosim table row duomenis is masyvo
        $string = '';
        foreach ($this->employees as $employee) {
            $fullName = $employee->getFullName();
            $salary = $employee->withdrawSalary();
            $string .= "
            <tr>
                <td>$fullName</td>
                <td>$salary</td>
            </tr>
            ";
        }
        echo "
        <table>
            <thead>
                <tr>
                    <th>Vardas Pavarde</th>
                    <th>Atlyginimas</th>
                </tr>
            </thead>
            <tbody>
                $string
            </tbody>
        </table>
        ";
    }
}
