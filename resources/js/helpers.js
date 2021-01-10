/**
 * Get username from session in backend in case user refreshes the page, causing data in store to be lost
 *
 * @param {Object} state
 * @param {String} state.username
 * @returns {void}
 */
export function getUsername(state) {
    if (state.username) {
        return;
    }

    axios.post('/login-rpc/check').then(response => {
        state.username = response.data.username;
    });
}
