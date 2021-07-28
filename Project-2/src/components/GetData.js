import React, {  useState, useEffect } from "react";
import './loader.css';

const GetData = () => {
    const [users, setUsers] = useState([]);
    const [loading, setLoading] = useState(false);

    useEffect(() => {
        const fetchData = ()=> setTimeout( async function getUsers (){ //fetching data from API
            const response = await fetch('https://reqres.in/api/users?page=1');
            const res_data = await response.json();
            
            setUsers(res_data.data);
            console.log(res_data.data);
            setLoading(true);
          }, 4000);
    
        fetchData();
    }, [])


     return <>
        {
            loading ? (
                <div className="container" style={{marginTop:"3em"}}>
                    <div className="row">
                        <div className="container col-12 mx-auto">
                            <div className="row">
                                {
                                    users.map((curElem, index) => {
                                        return (
                                            <div key={index} className="card" style={{margin: "2em", width: '18rem'}}>
                                                <img className="card-img-top" src={curElem.avatar} alt={curElem.first_name} />
                                                <div className="card-body">
                                                    <h5 className="card-title">{curElem.first_name} {curElem.last_name}</h5>
                                                    <p className="card-text">Email: {curElem.email} </p>
                                                </div>
                                            </div>
                                        )
                                    })
                                }
                            </div>
                        </div>
                    </div>
                </div>
            ) : (

                <div className="container">
                    <div style={{height:"80vh"}} className="d-flex justify-content-center align-items-center">
                        <div className="lds-hourglass"></div>
                    </div>
                </div>   
            )
        }
    </>
}
export default GetData;
