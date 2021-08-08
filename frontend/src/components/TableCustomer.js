import React from 'react'

const TableCustomer = () => {
    const list = 10;
    const arr = [];

    for(var i=0;i<5;i++)
    {
        arr.push(
            <tr>
                <td key="1">ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Phone</td>
                <td>Delivery Point</td>
                <td>Update</td>
                <td>Delete</td>
            </tr>
        )
    }
    console.log('complete');
    return (
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Phone</th>
                        <th>Delivery Point</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        arr.map(ar=>{
                            return ar;
                        })
                    }
                </tbody>
            </table>
        </div>
    )
    
}

export default TableCustomer
