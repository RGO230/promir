import { createStore } from 'redux';


const defaultState={
    isOpenModal:false,
}



const reducer=(state=defaultState,action)=>{
    switch (action.type){
        case 'OPEN_MODAL':
            return {...state, isOpenModal: !state.isOpenModal}


        default:
            return state

    }

}

const store = createStore(reducer);

export default store;