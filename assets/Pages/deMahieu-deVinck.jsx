import React, {useEffect, useState } from 'react';
import AllTable from '../Components/AllTables'
import axios from'axios'


const Family = () => {

    const [family, setFamily] = useState([]);

    useEffect(() => {
        axios.get("https://localhost:8000/api/people?page=1&FamilyNumber=7")
        .then(Response => Response.data['hydra:member'])
        .then(data => setFamily(data))
        .catch(error => console.log(error.response));
        window.scroll(0, 0);
    }, []);
    return ( 
        <>
            <AllTable 
                tabParents={family}
                numberParent="2"
            />
        </>
     );
}
 
export default Family;