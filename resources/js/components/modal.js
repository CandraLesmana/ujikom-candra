import React from "react";

function Modal(props) {
    return (
        <>
            <div className="modal fade" id={props.nameModal} tabindex="-1" aria-labelledby={props.nameModal + 'Label'} aria-hidden="true">
                <div className="modal-dialog">
                    <form onSubmit={props.handle}>
                        <div className="modal-content">
                            <div className="modal-header">
                                <h5 className="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div className="modal-body">
                                {props.children}
                            </div>
                            <div className="modal-footer">
                                <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" className="btn btn-primary" data-bs-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </>
    );
}

export default Modal;