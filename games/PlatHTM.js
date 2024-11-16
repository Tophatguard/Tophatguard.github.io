const canvas = document.querySelector('canvas')
const c = canvas.getContext('2d')

canvas.width = 1024
canvas.height = 576

c.fillRect(0, 0, canvas.width, canvas.height)

const gravity = 0.2
const onGround = false
class Sprite {
    constructor({position, velocity, size}) {
        this.position = position
        this.velocity = velocity
        this.height = size.y
        this.width = size.x
        this.lastKey
    }

    draw() {
        c.fillStyle = 'red'
        c.fillRect(this.position.x, this.position.y, 50, this.height)
    }

    update() {
        this.draw()

        this.position.x += this.velocity.x
        this.position.y += this.velocity.y

        if (this.position.y + this.height + this.velocity.y >= canvas.height) {
            this.velocity.y = 0
            onGround = true
        } else {
            this.velocity.y += gravity
        }
    }
}

const player = new Sprite({
    position: {
        x: 0,
        y: 0
    },
    velocity: {
        x: 0,
        y: 0
    },
    size: {
        x: 50,
        y: 50
    }
})

console.log(player)

const keys = {
    //playerKeys
    a: {
        pressed: false
    },
    d: {
        pressed: false
    },
    w: {
        pressed: false
    }
}
let lastKey

function animate() {
    window.requestAnimationFrame(animate)
    c.clearRect(0, 0, canvas.width, canvas.height)
    c.fillStyle = 'black'
    c.fillRect(0, 0, canvas.width, canvas.height)
    player.update()

    player.velocity.x = 0

    //player movement
    if (keys.d.pressed && lastKey === 'd') {
        player.velocity.x = 2
    } else if (keys.a.pressed && lastKey === 'a') {
        player.velocity.x = -2
    }
}

animate()

window.addEventListener('keydown', (event) => {
    switch (event.key) {
        case 'd':
            keys.d.pressed = true
            lastKey = 'd'
        break
        case 'a':
            keys.a.pressed = true
            lastKey = 'a'
        break
        case 'w':
            player.velocity.y = -10
            onGround = false
        break
    }
    console.log(event)
})

window.addEventListener('keyup', (event) => {
    //player movement
    switch (event.key) {
        case 'd':
            keys.d.pressed = false
        break
        case 'a':
            keys.a.pressed = false
        break
        case 'w':
            keys.w.pressed = false
        break
    }
    console.log(event)
})