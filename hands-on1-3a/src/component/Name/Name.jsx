import './Name.css';
function Name({firstname,lastname}){
    return(
        <div>
            <h1><span className='text-blue'>{firstname}</span> <span className='text-lightblue'>{lastname}</span></h1>
        </div>
    )
}

export default Name;